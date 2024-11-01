=== Yahoo Currency ===
Contributors: mouring
Tags: rss, atom, feed, inline, embed, rdf, currency, money, yahoo, rates, exchange rates
Requires at least: 2.5
Tested up to: 2.9.1
Stable tag: 1.00

With the yahoo currency plugin you can display a feed of Yahoo Currency Exchange rates.

== Description ==

With the yahoo currency plugin you can display and embed Yahoo Currency Feeds in your Wordpress posts and pages using the following shortcode:

`[ycurrency base="Currency Code" currencies="Currency Code,Currency Code,Currency Code etc"]`


FILTER USAGE

* Simple:
   
Just put a `[ycurrency base="Currency Code" xcur="Currency Code,Currency Code,Currency Code etc"]` in your post, and the rates will show up.

* NAMED PARAMETERS

For some customisation there are some options you can use.

- base : The Base Currency in international format (USD)
- xcur : The other currencies you want to display the rate compared to the base currency seperated by a comma (GBP,EUR)

Examples:

`[ycurrency base="USD" xcur="GBP,EUR,ZAR"]` (display the buy and sell rate of the US Dollar against the British Pound,Euro,South African Rand)

Finally note the whole thing must be on ONE line.  No line breaks or else it won't work.

1.00 Initial release.
== Installation ==

Just unzip in your plugin folder, and actived in your wordpress admin panel or install through your wordpress admin interface