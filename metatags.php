<?php
// Metatags extension, https://github.com/GiovanniSalmeri/yellow-metatags

class YellowMetatags {
    const VERSION = "0.8.16";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("metatags", "color-scheme, google, googlebot, referrer, robots, theme-color"); // https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta/name
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $metaNames = preg_split("/\s*,\s*/", $this->yellow->system->get("metatags"));
            foreach ($metaNames as $metaName) {
                if ($this->yellow->page->isExisting($metaName)) {
                    $output .= "<meta name=\"".htmlspecialchars($metaName)."\" content=\"".htmlspecialchars($this->yellow->page->get($metaName))."\" />\n";
                }
            }
        }
        return $output;
    }
}
