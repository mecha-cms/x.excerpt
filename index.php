<?php namespace x\excerpt;

function page__content($content) {
    if (!$content || (false === \strpos($content, "\f") && false === \strpos($content, '&#12;') && false === \strpos($content, '&#xC;') && false === \strpos($content, '&#xc;'))) {
        return $content;
    }
    // Normalize `&#12;` and `&#xc;` to a literal `\f`. Also, remove the HTML element wrapper if any.
    return \preg_replace('/\s*<([\w:-]+)(?>\s[^>]*)?>\s*(?>\f|&#(?:12|x[Cc]);)\s*<\/\1>\s*|\s*(?>\f|&#(?>12|x[Cc]);)\s*/', "\f", $content);
}

function page__excerpt($excerpt) {
    if ($excerpt) {
        return $excerpt;
    }
    return false !== ($r = \strstr($this->content ?? "", "\f", true)) && "" !== ($r = \trim($r)) ? $r : null;
}

\Hook::set('page.content', __NAMESPACE__ . "\\page__content", 2.1);
\Hook::set('page.excerpt', __NAMESPACE__ . "\\page__excerpt", 2.1);