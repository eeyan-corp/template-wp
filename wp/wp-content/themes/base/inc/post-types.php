<?php

if (!defined("ABSPATH")) die();

add_action("init", function () {
  // ニュース
  register_post_type("news", [
    "label" => "ニュース",
    "public" => true,
    "has_archive" => true,
    "supports" => ["title"],
  ]);
});
