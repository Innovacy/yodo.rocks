About yodo.rocks
--------

- Context-/scope-aware framework
- the first framework made for PHP 7
- maximum reusability of code and components
- create apps that can be reused as if they were plugins

Yodo stands for: You Only Develop Once - a rapid application development framework for PHP 7

Behind Yodo stands the idea, that everything should be developed only once and reused in every other application or website where it would be needed again.

Too often, this is not the case, as frameworks or the projects build are just not modular enough.
With most other frameworks we tend to build massive standalone apps, which makes it difficult to reuse or even combine them.

The goal with Yodo is to change that, as the Yodo architecture itself should enforce that modularity as much as possible by default, even if the developer doesn't pay much attention.



Why Yodo Rocks?
--------

Now think if you want, that Yodo rocks or not, but when I'm talking about Yodo rocks, I mean Yodo's architecture.

'Rocks' are the main concept behind Yodo. Rocks are the modular parts that can be combined as needed to full-blown apps. However, unlike the concept of modules which have a lot of dependencies usually, rocks are fully functional apps on their own and yet as flexible to work together with any other rock.

Further, with the concept of rocks, Yodo wants to make rapid web development possible. Stop building massive apps and just build rocks, that you can put together as you or your customers will require from now on. Focus on the last part of app development, don't repeat every time the beginning.

Another goal of Yodo is, to allow development without bothering too much about any internals, by making writing code feel as natural as possible and less technical. This comes with the benefit of being developed from the beginning to be as flexible, to support any technologies by not fully depending on any technology. In practice, this means, if a developer wants to use Smarty and another developer wants to use Twig as template engine for their rock, they can do so, however the one writing the business logic wouldn't need to even know which template engine was used to make things work.


Roadmap
--------

Yodo has a long way still before it will implement everything for the 1.0.0 release.

There's no roadmap yet, as it's in the early stages. For now it's just about getting as much code done for a first functional release. Then, when the time seems right, a roadmap will be announced.

You are welcomed to participate with ideas, suggest improvements or even contribute.


Requirements for running/developing with Yodo
--------

Yodo is geared towards the following compatibilities:

* Requires at least PHP version 7 (yes! read: [Decision Keys for PHP 7](docs/Decision Keys for PHP 7.md))
* All code is PHP 7 compatible
* JSON support is required
* PDO support with the driver for your database, if you want to use database support

