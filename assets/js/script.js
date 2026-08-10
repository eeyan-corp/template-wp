// ハンバーガーメニュー（SP）
const menuBtn = document.querySelector(".js-menu-btn");

if (menuBtn) {
  const setMenuState = (isOpen) => {
    document.body.classList.toggle("fixed", isOpen);
    menuBtn.setAttribute("aria-expanded", String(isOpen));
    menuBtn.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
  };

  menuBtn.addEventListener("click", () => {
    setMenuState(!document.body.classList.contains("fixed"));
  });

  document.querySelectorAll(".js-menu a").forEach((link) => {
    link.addEventListener("click", () => setMenuState(false));
  });
}

// サイドナビ（FVを過ぎたら右から出す）
{
  const sideNav = document.querySelector(".js-side-nav");
  const fv = document.querySelector(".js-fv");

  if (sideNav && !fv) {
    sideNav.classList.add("is-visible");
  } else if (sideNav) {
    new IntersectionObserver(([entry]) => {
      sideNav.classList.toggle("is-visible", !entry.isIntersecting);
    }).observe(fv);
  }
}

// 装飾ラインのうねり（SPでは切る）。
// CSSのfilter:noneだけではSMILのタイムラインが回り続けるので、SVG側の<animate>ごと外す
if (window.matchMedia("(max-width: 767px)").matches) {
  document.querySelectorAll(".linework animate").forEach((el) => el.remove());
}

// スクロールアニメーション
{
  // .common-labelはgridなので、分割した文字はまとめて1つのグリッドアイテムに入れる
  document.querySelectorAll(".common-label").forEach((label) => {
    const text = label.textContent;
    const wrapper = document.createElement("span");
    let index = 0;

    for (const character of text) {
      if (character.trim() === "") {
        wrapper.append(character);
        continue;
      }

      const clip = document.createElement("span");
      const inner = document.createElement("span");
      clip.className = "char";
      clip.style.setProperty("--i", index);
      inner.textContent = character;
      clip.append(inner);
      wrapper.append(clip);
      index += 1;
    }

    label.textContent = "";
    label.append(wrapper);
  });

  document.querySelectorAll(".js-stagger").forEach((list) => {
    [...list.children].forEach((child, i) => child.style.setProperty("--i", i));
  });

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-inview");
        observer.unobserve(entry.target);
      });
    },
    // 上方向を大きく広げて、勢いよくスクロールして通り過ぎた要素も必ず交差させる
    { rootMargin: "9999px 0px -15% 0px" },
  );

  document.querySelectorAll(".js-fade, .js-stagger, .common-label").forEach((el) => observer.observe(el));
}

// アコーディオン（FAQ）
document.querySelectorAll(".js-accordion-trigger").forEach((trigger) => {
  trigger.addEventListener("click", () => {
    const accordion = trigger.closest(".js-accordion");
    const isOpen = accordion.classList.toggle("is-open");
    trigger.setAttribute("aria-expanded", String(isOpen));
  });
});
