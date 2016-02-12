<?php return array(
    "/^$/" => "site/index",
    "/^blog$/" => "index/blog",
    "/^blog\/page\/([0-9]{1,})/" => "index/getArticleById/$1",
    "/^blog\/admin$/" => "admin/index/",
    "/^blog\/admin\/form$/" => "admin/routForm",
    "/^blog\/admin\/([0-9]{1,})\/edit/" => "admin/editArticleById/$1",
    "/^blog\/admin\/([0-9]{1,})\/update/" => "admin/updateArticleById/$1",
    "/^blog\/admin\/([0-9]{1,})\/delete/" => "admin/deleteArticleById/$1",
);