<?php
function menuDashboardAdmin($id = null)
{
    $menu = [
        [
            "title" => "Team",
            "icon" => "mdi mdi-view-dashboard",
            "link" => "team",
        ],
        // [
        //     "title" => "Penugasan",
        //     "icon" => "mdi mdi-clipboard",
        //     "link" => "penugasan",
        // ],
        // [
        //     "title" => "Mahasiswa",
        //     "icon" => "mdi mdi-account-network",
        //     "link" => "mahasiswa",
        //     'role' => [1, 2, 3]
        // ],
        // [
        //     "title" => "Mahasiswa Baru",
        //     "icon" => "mdi mdi-account-network",
        //     "link" => "mahasiswabaru",
        //     'role' => [1, 8]
        // ],
        // [
        //     "title" => "Perizinan",
        //     "icon" => "mdi mdi-network-question",
        //     "link" => "perizinan",
        //     'role' => [1, 3]
        // ],
        // [
        //     "title" => "Faq",
        //     "icon" => "mdi  mdi-paperclip",
        //     "link" => "faq",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "Category Faq",
        //     "icon" => "mdi  mdi-paperclip",
        //     "link" => "faq.category",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "Berita",
        //     "icon" => "mdi mdi-paper-cut-vertical",
        //     "link" => "news",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "Gallery",
        //     "icon" => "mdi mdi-camera",
        //     "link" => "gallery",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "Vidio",
        //     "icon" => "mdi mdi-camera",
        //     "link" => "vidio",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "UKM",
        //     "icon" => "mdi mdi-equal-box",
        //     "link" => "ukm",
        //     'role' => [1, 6]
        // ],
        // [
        //     "title" => "Fakultas",
        //     "icon" => "mdi mdi-equal-box",
        //     "link" => "fakultas",
        //     'role' => [1, 5]
        // ],
        // [
        //     "title" => "User Management",
        //     "icon" => "mdi mdi-account-multiple-outline",
        //     "link" => "user",
        //     'role' => [1]
        // ],

    ];

    if (isset($id)) {
        return $menu[$id];
    } else {
        return $menu;
    }
}