App Structure (and the vision of how apps should be)
----

    Note: This document describes at this stage the vision for what should be
    possible with Yodo and one of many ideas why Yodo was born.
    The framework has to be build such that will allow the scenarios shown here,
    such this document should be seen as a guideline.


Everything in Yodo is a rock. Even your app. This ensures maximum flexibility and extensibility.

The folder structure will consist always of the main folders 'yodo' and 'rocks'.

'yodo' contains all files from the framework, while 'rocks' contains your app and all other rocks (speak components) it
is using.

Below the 'rocks' folder there will be at least two more folders, one of which has to be called 'app' and the other can
be called by whatever you call your application.

'app' contains the basic setup (in yodo terms: the glueing) of your whole application, but not the logic like controllers or models. These go
all in your other folder.

Say, you are distributing your application and someone wants to extend it considerably or incorporate it in their
application. Instead of making the modifications in your folder, they can create another folder under rocks,
while leaving yours unchanged. All their logic does now in the new folder and they glue all things together in the app
folder.

## Example:

You want to build a store, but reuse as many solutions as possible. Let's call your app 'storeultima'.

You create the folder 'storeultima' under 'app'. Now you figure out that some authors have released the Yodo apps
'CMS' and 'XY Billing', which would be perfect for your storeultima. Luckily, Yodo apps are rocks, speak reusable
components on their own. You clone them and you have this final folder structure:

If now the author of 'CMS' releases a new version, you can even easy update it in your own app.

Let's think, that after a while you want to integrate a blog in your store. Wordpress is surely a great piece of
software, but you want something that integrates nicely in your store, without requiring all this additional setup,
maintenance and creating and maintaining a separate theme. Further, you want to easily be able integrate products
and their details from storeultima in your blog. So you need this tight integration, without having duplicate code
in some other plugins. Luckily, someone developed 'BlogRock', which is based on 'CMS', which you already use.

You install 'BlogRock' in it's own folder 'blogrock' and voila, you can use any of it's functionality not only on their
own pages, but also in any other part of 'storeultima' using the same api, as example finding and linking any blog
articles within your product page. Yodo takes care of all the coupling needed.

Your final folder structure would look this now:

    /yodo
    /rocks
        /app
        /storeultima
        /cms
        /xybilling
        /blogrock

It's important to mention, while all the glueing happens in the app folder, like the routing, that each rock can define
their own definitions for everything within their own folder too.

As example, 'blogrock' could define for an url like '/blog/mypage/comments' the 'mypage/comments' is handled, but you
define in app that the handling of '/blog' is done from 'blogrock'. However, you can still override any such definitions
in 'app'. As example, while '/blog/mypage' is being handled still by 'blogrock', you could replace
'/blog/mypage/comments' as also the comments embedded in '/blog/mypage' by a new better comments-only rock, by defining
in your 'app' folder that these parts are handled from your freshly installed '/rocks/betterblogrockcomments' rock,
even though usually 'blogrock' comes with it's own functionality for it and even though it embeds it in it's templates.
This would be possible, if 'blogrock' followed all best practices of Yodo and comments would have their own interface.

