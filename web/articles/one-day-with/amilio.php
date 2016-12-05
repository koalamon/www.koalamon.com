<div id="one-day-with">
    <div class="content">
        <h1 style="width: 100%; text-align: center">One day with amilio.</h1>

        <div class="main-info" style="margin-bottom: 100px; text-align: center">
            <div style="width: 100%; text-align: center; margin-bottom: 100px">
                <img src="/images/odw_amilio.png" style="width: 600px;">
            </div>
            amilio is a shopping community based on affiliate programs. Every user is able create lists of products
            he or she likes. All those lists and products can be liked and shared by others.

            <div>
                <ul>
                    <li><a href="#story">The Story of amilio</a></li>
                    <li><a href="#foundation">The Foundation</a></li>
                    <li><a href="#goal">The Goal</a></li>
                    <li><a href="#leanchecks">Lean Checks</a></li>
                    <li><a href="#further">Further Checks</a></li>
                </ul>

                <div style="clear: both"></div>

            </div>
        </div>
    </div>

    <div class="main-element-grey" style="margin-bottom: 100px">
        <div class="content">
            <a name="story">
                <h2>The Story of amilio</h2>
            </a>
            <p>
                amilio was founded in 2015 by some friends with a technical background. The idea they had was, that everybody is an
                expert in something. So everybody can recommend products in his or hers domain. amilio builds on top of that idea.
                When registering you are able to curate product lists of stuff you like. Additionally you can add your affiliate id
                so you can earn some money with your lists.
            </p>
            <p>
                Although the idea behind amilio seems to be very promising, the team decided to build a proof of concept first. A good
                looking proof but still a proof. Paying to much attention to technical details could be a waste of time if you don't
                know if a project idea will work.
            </p>
        </div>
    </div>

    <div style="margin-bottom: 100px">
        <div class="content">
            <a name="goal">
                <h2>The goal</h2>
            </a>
            <p>
                The amilio platform is deployed continuously via jenkins ci. Therefore it is important to check if the most important
                features are still working afterwards. Here, the central focus lies on the product lists and collection.
            </p>
        </div>
    </div>

    <div class="main-element-grey" style="margin-bottom: 100px">
        <div class="content">
            <a name="foundation">
                <h2>The Foundation</h2>
            </a>
            <p>
                amilio is based on the symfony2 framework and is written in php. It was a conscious decision to choose those two
                technology because of their robustness and the many existing components. With millions of users of the same stack
                the need for tests of these component is nominal.
            </p>
            <p>

            </p>
        </div>
    </div>

    <div class="content">
        <div>
            <div>
                <a name="leanchecks">
                    <h2>Lean Checks</h2>
                </a>

                <style>
                    table {
                        border: 1px solid #f9f9f9;
                    }

                    table thead tr {
                        background-color: #f9f9f9;
                    }

                    table tr td {
                        vertical-align: top;
                        line-height: 25px;
                    }

                    table tr {
                        border-bottom: 20px solid transparent;
                    }

                    table tr:first-child {
                        border-bottom: none;
                    }

                    table tr:last-child {
                        border-bottom: none;
                    }

                    table tr td:nth-child(2) {
                        border-right: 40px solid transparent;
                    }

                    table tbody tr td:nth-child(1) {
                        font-weight: 600;
                    }

                    table tr td {
                        padding: 10px;
                    }

                    table tr td.page {
                        font-weight: 600;
                    }

                    .value {
                        font-family: "Courier New";
                        font-size: 12px;
                        display: block;
                    }

                    p {
                        line-height: 28px;
                    }
                </style>

                <table width="100%">
                    <thead>

                    <tr style="">
                        <td style="width: 150px">Page</td>
                        <td style="width: 600px">Rule</td>
                        <td>Check</td>
                    </tr>
                    </thead>

                    <tbody>

                    <tr style="border-top: 1px solid #f9f9f9;">
                        <td>Home page</td>
                        <td>
                            The homepage starts with a list of eight curated links. We check if there are eight elements in that
                            list.
                        </td>
                        <td>
                            XPath Exists <span class="value">//div[@id="newestHomepageList"] /div[contains(@class, "item")] equals 8</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            Beneath the curated links there is a list of recently created collection. There must be ten of that kind.
                        </td>
                        <td>
                            XPath Exists <span class="value">//div[@id="newestChannelsList"] /div[contains(@class, "item")] equals 10</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            It is possible to like products. There is a complex algorithm for calculating the hype factor. As a result there is
                            a list ten products shown on the homepage.
                        </td>
                        <td>
                            XPath Exists <span class="value">//div[@id="newestElementsList"] /div[contains(@class, "item")] equals 10</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            Check if footer is rendered. We believe when one element, like "impressum", is rendered chances are
                            high that the whole footer is displayed.
                        </td>
                        <td>
                            RegEx exists <span class="value">impressum</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            Check if header is rendered. Just like the footer rule we only check for the existence of one single
                            element. In this case it's the string "suche".
                        </td>
                        <td>
                            RegEx exists <span class="value">suche</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            On every product we show in the list view we also provide the like count. This information is fetched via ajax
                            from a json api. As we don't have a json schema for the endpoint we just check that the answer is well formed.
                        </td>
                        <td>
                            JsonValidator<span class="value">on</span>
                        </td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td>User page</td>
                        <td>
                            On the userpage there are all products and collections of a specific user listed. We created a
                            special user for that case so we can be sure the collections and products do not change.
                        </td>
                        <td></td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td></td>
                        <td>The name of the user is visible</td>
                        <td>
                            RegEx exists<span class="value">testuser</span>
                        </td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td></td>
                        <td>Number of products that can be seen is 10.</td>
                        <td>
                            CSS Selector exists<span class="value">.productItem equals 10</span>
                        </td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td></td>
                        <td>Number of collections that can be seen is 10.</td>
                        <td>
                            CSS Selector exists<span class="value">.channel equals 10</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Collection</td>
                        <td>
                            A collection page can be checked the same way as the user page. There is a exact number
                            of elements that can be counted. This works although the underlying algorithms are different.
                        </td>
                        <td></td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td>Product page</td>
                        <td>
                            As result of our experience the product page does not break very often. As a result we decided
                            to test only some minor attributes.
                        </td>
                        <td></td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td></td>
                        <td>Product name and description are visible</td>
                        <td>
                            RegEx exists<span class="value">Nike Air Zoom Pegasus 31</span>
                            RegEx exists<span class="value">commitment to cushioning</span>
                        </td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td></td>
                        <td>Collections that contain this exact product are listed</td>
                        <td>
                            RegEx exists<span class="value">Laufschuhe 2015</span>
                        </td>
                    </tr>

                    <tr>
                        <td>Blog</td>
                        <td>
                            The blog overview page is a standard collection created by the blog user. This is why the
                            tests for the collection page also apply here.
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The blog articles are almost static. They are fetched via http from an Wordpress system in the
                            background. The most tasks are done by Wordpress and do not have to be tested following the lean
                            testing approach. Therefore we only check for the headline and a sub-sentence from the post.
                        </td>
                        <td>
                            RegEx exists<span class="value">Shop, Shop, Hooray.</span>
                            RegEx exists<span class="value">Im Bereich Fashion</span>
                        </td>
                    </tr>

                    <tr style="background-color: #f9f9f9;">
                        <td>Search</td>
                        <td>
                            The search result page is technically rendered as evefry other product list. That is why we only
                            have to check if there are products found. As this search query is performed via our solr database
                            we can assume that the system is up and running when there are results.
                        </td>
                        <td>CSS Selector exists<span class="value">.productItem equals 10</span></td>
                    </tr>
                    <tr>
                        <td>Sitemap</td>
                        <td>
                            For a better serach engine optimization we provide a sitemap xml file. This can be checked
                            with the sitemap validator.
                        </td>
                        <td>Xml Sitemap Checker<span class="value">on (non strict)</span></td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td>Standard Checks</td>
                        <td>There are some standard checks that we apply on every html page we tests.</td>
                        <td>
                            JavaScript Error Scanner <span class="value">on</span>
                            LittleSEO<span class="value">on</span>
                            KoalaPing <span class="value">http status code 200 with timestamp</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="main-element-grey">
        <div class="content">
            <a name="further"><h2 style="margin-bottom: 50px">Further Checks</h2></a>
            <p>
                With amilio we created a very complex and flexible system for a big community. With leankoala we got rid off the
                most of our selenium tests that were only checking for the existence of text fragments. Those test were expensive
                to create and broke from time to time. With leankoala our test effort is minimal.
            </p>
            <p>
                What we can't test with leankoala is the login process. Therefore we have small selenium tests running in combination
                with BrowserStack.
            </p>
        </div>
    </div>
</div>
