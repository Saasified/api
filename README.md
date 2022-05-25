# Saasify
The best parts of the best packages.

## The what?
Saasify is a starter kit for SaaS applications.

It is built using Laravel, Passport, Laratrust, Scribe and some helper packages.

Intended to be used for building SaaS applications similar to Shopify, Github and others.


## The why?
The reason for starting this, was that the default Laravel project skeleton is geared toward building simple applications, with the optional usage of the API only by it's owners.

Why Sanctum? From the moment I started, this did not suffice. Simply because you cannot authorize a third party to manipulate the data in the right way. Sanctum works by generating personal tokens. Although it allows the setting of limited scopes, it still is not quite like complete OAUTH2 with JWT, which proves who generated the token (the user), who is granted access (the application), and many other things you'd embed in the JWT for the purpose of a SaaS application that would offer the same level of structure as Shopify and similar businesses (not only ecommerce platforms, but even like Github for example and their Marketplace).

Passport is easy to use, it is easy to understand, it not only works, but really, really works. It is exactly what you need to build the next Shopify. Therefore, why would you start with Sanctum and then, when going to production, cry that it's going to cost you a huge amount to move to Passport?

Building the next Shopify or Github involves making Auth good from start, or the complexity to fix it may cause the business to fail.
