<?php
// 背景の装飾ラインをインライン展開する。
// パスの「形そのもの」をうねらせるため、SVG内にノイズ変位フィルターを持たせて全体に適用する。
// （CSSのtransformではパスが剛体のまま動くだけで波打たない）
$file = ABSPATH . "../assets/images/top/{$name}-linework.svg";
if (!file_exists($file)) return;

$id  = "linework-wave-{$name}";
$svg = file_get_contents($file);

// うねりの粗さ・強さはアートワークの座標系サイズに合わせて変える。
// from/to は変位量（feDisplacementMapのscale）の振れ幅。
// baseFrequency は動かさない：動かすとノイズ模様そのものが毎フレーム生成し直され、
// 細い線が沸き立つようにチラついてしまう。模様を固定して量だけ揺らすと滑らかに動く。
$presets = [
  "fv"         => ["freq" => "0.0016 0.0030", "from" => 4, "to" => 26, "blur" => 0.5, "dur" => "8s"],
  "philosophy" => ["freq" => "0.0012 0.0022", "from" => 5, "to" => 34, "blur" => 0.5, "dur" => "9s"],
  "support"    => ["freq" => "0.0014 0.0045", "from" => 3, "to" => 18, "blur" => 0.5, "dur" => "6s"],
  "parents"    => ["freq" => "0.0022 0.0018", "from" => 4, "to" => 24, "blur" => 0.5, "dur" => "8s"],
  "schedule"   => ["freq" => "0.0012 0.0022", "from" => 5, "to" => 34, "blur" => 0.5, "dur" => "10s"],
];
$p = $presets[$name] ?? $presets["philosophy"];

// feDisplacementMap は最近傍でサンプリングするため、アンチエイリアスの効いた細い線が
// 階段状に欠ける。変位後にごく弱いぼかしを掛けてそれを均す。
$filter = sprintf(
  '<filter id="%1$s" x="-12%%" y="-12%%" width="124%%" height="124%%"'
  . ' color-interpolation-filters="sRGB" filterUnits="objectBoundingBox">'
  . '<feTurbulence type="fractalNoise" numOctaves="1" seed="4" baseFrequency="%2$s" result="rawNoise" />'
  . '<feGaussianBlur in="rawNoise" stdDeviation="6" result="noise" />'
  . '<feDisplacementMap in="SourceGraphic" in2="noise" scale="%3$s"'
  . ' xChannelSelector="R" yChannelSelector="G">'
  . '<animate attributeName="scale" dur="%6$s" repeatCount="indefinite"'
  . ' calcMode="spline" keyTimes="0;0.5;1" keySplines="0.45 0 0.55 1;0.45 0 0.55 1"'
  . ' values="%3$s;%4$s;%3$s" />'
  . '</feDisplacementMap>'
  . '<feGaussianBlur stdDeviation="%5$s" />'
  . '</filter>',
  $id, $p["freq"], $p["from"], $p["to"], $p["blur"], $p["dur"]
);

// 枠の縦横比はCSS側（aspect-ratio や固定値）で管理しているので、SVGは箱に合わせて伸ばす。
// FVのみ横に引き伸ばされ、それ以外は枠比＝viewBox比なので実質等倍のまま。
$svg = preg_replace('/(<svg\b)/', '$1 preserveAspectRatio="none"', $svg, 1);

// stroke-dasharray / dashoffset をパスの実長に関係なく 0〜1 で扱えるようにする
$svg = preg_replace('/<path\b/', '<path pathLength="1"', $svg);

// <svg> 直後にフィルターを挿し、中身を <g filter> で包む
$svg = preg_replace('/(<svg\b[^>]*>)/', '$1' . $filter . '<g class="linework-body" filter="url(#' . $id . ')">', $svg, 1);
$svg = preg_replace('/<\/svg>\s*$/', '</g></svg>', $svg, 1);

echo '<div class="linework' . (isset($class) ? " {$class}" : "") . '" aria-hidden="true">' . $svg . '</div>';
