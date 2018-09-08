<?php

return [
  "colors" => [
    "primary" => "#009688",
    "secondary" => "#9c27b0",
    "primary-name" => "teal",
    "secondary-name" => "purple"
  ],
  "logo" => [
    "text"  => "R9 Admin Panel",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Firefox_Logo%2C_2017.svg/1200px-Firefox_Logo%2C_2017.svg.png"
  ],
  "links" => [
    "logout"  => "admin.logout",
    "profile" => "admin.profile"
  ],
  "items" => [
    [
      "label" => "Dashboard",
      "icon"  => "dashboard",
      "route" => "admin.dashboard"
    ],
    [
      "label" => "Users",
      "icon"  => "person",
      "route" => "admin.user.index",
      "can"   => "view",
      "model" => \App\Models\User::class
    ],
    [
      "label" => "Moderators",
      "icon"  => "security",
      "route" => "admin.moderator.index",
      "can"   => "view",
      // This can't be a string (only works like this) (need to figure out why)
      "model" => \App\Models\Admin::class
    ],
    [
      "label" => "Settings",
      "icon"  => "settings",
      "route" => "admin.setting.edit",
      "can"   => "update",
      "model" => \App\Models\Setting::class
    ]
  ]
];