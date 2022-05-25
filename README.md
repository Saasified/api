# Saasify

A Laravel Project Skeleton for SaaS applications

It is built using Laravel, Passport, Laratrust, Scribe and some helper packages.

Intended to be used for people building SaaS applications similar to Shopify, Github and others.

The reason to start this, is that the default Laravel project skeleton is oppiniondated for building simple applications, with optional usage of the API only by the owners of it.

Why Sanctum, as of the moment I started this was not OK? Simply because you can't authorize a third party to manipulate the data the right way. Sanctum works by generating personal tokens. Although it allows to set limited scopes, still it is not like complete OAUTH2 with JWT, which proves who generated the token (the user), who is granted access (the application), and many other things you'd embed in the JWT for the purpose of a SaaS application that would offer same level of structure like Shopify and similar businesses (so not only ecommerce platforms, but think like Github for example and their Marketplace).

Passport is easy to use, easy to understand, works, really, it works, and it is exactly what you need to build the next Shopify. So, don't start with Sanctum and when going to production, cry that it's going to cost you huge to move to Passport.

Building the next Shopify or Github involves making Auth good from start, or the complexity to fix it might fail the business.
