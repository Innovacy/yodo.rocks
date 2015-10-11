Decision keys for PHP 7
----

Why PHP 7 requirement, might someone ask?

First I thought, to set the minimum required PHP version at 5.6 or even 5.5.

However, after some thought, it made little sense.

I want Yodo to be a most modern framework and maybe even a new type of framework, seeing it to go ways where
I see frameworks to be soon and in future. There's one framework that already follows some of my visions (Laravel),
which however I only looked at it after I already envisioned Yodo and the way it should be made. It was interesting
to see that Laravel had many parallels to what was in my mind. However, it doesn't reach as far yet. With Yodo
I want to reach further (I know how this sounds... it's a high goal and a lot of work and unsure even if Yodo will make
it, but I see it also as a challenge and worth trying). It can only do so by using also the newest language features.

That said, Yodo will need quite some time before it's production ready. By that time, PHP 7 will be already standard.
So why not use the newest features that PHP 7 offers, from which Yodo will not just profit, but will probably need them
to be able to do better and with less complexity the things I envisioned.

Host Support for PHP 7 seems to be also no issue. Providers like 1&1 have already adopted the beta version of it and so
will offer the stable with no significant delays. Long gone are the times where providers waited forever before
upgrading. Ubuntu on the other side, might offer it only in some future version, but I believe that overall adaption
of PHP 7 might happen much faster than Ubuntu releases their versions and of what we are used from past PHP version.
Who knows, maybe someone will create a package that will install it in parallel to PHP5 under /etc/php7?

Another reason is to avoid suffering from [Legacy Code Cancer](http://www.sitepoint.com/legacy-code-cancer/) early.
After all, there are no reasons for backwards compatibility of any kind nor business reasons nor other such considerations
that would benefit anyone keeping php version compatibility more versus making usage of the newest capabilities
of a language for this stage of development of a new framework.

I guess - while there are frameworks already going for PHP 7 compatibility - this makes it the first framework
build for and with PHP 7 features even ;)


Some other key easons that played a role in this decision were:

- UTF8 charset is default in PHP 5.6
- PHP: variadic function support
- PHP: argument unpacking support
- PHP: constant scalar expressions
- PHP: return type declarations
- PHP: anonymous classes
- PHP: more generator features
- PHP: more performance with Closure::call
- In PHP 7 were deprecations removed, old syntax deprecated, syntax inconsistencies fixed, error handling improved and a lot more
- faster performing apps with the new PHP7 engine
- active support for PHP 5.5 ended on June 20, 2015
- active support for PHP 5.6 ends in only 10 months
- no further PHP 5 versions after PHP 7 expected
- PHP 5.6 can already be safely upgraded with 3 lines in Ubuntu 14.04, expected someone to make it as easy for PHP 7
- cutting edge technology and rapid development becomes more and more important

