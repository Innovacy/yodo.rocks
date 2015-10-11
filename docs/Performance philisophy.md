Performance Philisophy
---------
The usual process running a framework involves defining a lot of data (as example routes)
and after that, going through these lists to check what should be executed or not. Many frameworks even initiate
a lot of classes upfront by this process on every request. This has an impact on performance and resources.

Imagine, the app wouldn't need to tell the framework (as if these were hardcoded in the framework, however they are not.)
The framework could then just skip running all the code that loads configurations, sets definitions etc. and execute
with more efficient code right away the only route needed.

Yodo.rocks tries an approach to eliminate as many of these runtime processes as possible. However, at some point
the several definitions or configurations must be set from the application, this doesn't seem avoidable. By allowing
at least once code to run, that will set the required definitions (let's call this the wiring of the rocks -
*TODO* explained in other documentation), the framework can setup afterwards something that will allow it to skip
everything that is not needed on all subsequent runs, even running the code from all parts that would have set up these
definitions. This way, a greater performance should be achieved on all requests.

The great challenge - as things can't be hardcoded and we still want the highest flexibility and modularity
possible - herein lies in creating code that will make this possible and yet will still achieve greater performance.
This seems even more difficult, as any rocks could have code for any part of the app to hook in. Yet, even if difficult,
this is one of the goals of this framework.
