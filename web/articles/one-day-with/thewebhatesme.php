<div id="one-day-with">
    <div class="content">
        <h1 style="width: 100%; text-align: center">One day with the web hates me.</h1>

        <div class="main-info" style="margin-bottom: 100px; text-align: center">
            <div style="width: 100%; text-align: center; margin-bottom: 100px">
                <img src="/images/odw_whm.png">
            </div>
            The web hates me started as phphatesme in 2008 and is one of the best known German php blogs.
            <div>
                <ul>
                    <li><a href="#story">The Story</a></li>
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
                <h2>The Story</h2>
            </a>
            <p>
                Phphatesme started in 2008 as a hobby project, but grew to be the most famous German
                php blog the next year. With about 2.000 readers a day in 2010 it became an important source of
                information for the german php community.
            </p>
            <p>
                After four years of blogging the focus on php was lost as more web technologies rose. JavaScript, Html, CSS and other
                topics were part of the daily work. Additionally project management, leadership and quality management
                got on focus.
            </p>
            <p>
                In 2013 the blog was renamed to "the web hates me" and is still one of the most important contact point
                for many web devlopers.
            </p>
        </div>
    </div>

    <div style="margin-bottom: 100px">
        <div class="content">
            <a name="goal">
                <h2>The goal</h2>
            </a>
            <p>
                The web hates me platform in build on the shoulders of wordpress and is almost feature complete. Small features are
                release now and then but most of the changes that are made are editorial. The goal was to continuously check
                the website after new articles ort features.
            </p>
        </div>
    </div>

    <div class="main-element-grey" style="margin-bottom: 100px">
        <div class="content">
            <a name="foundation">
                <h2>The Foundation</h2>
            </a>
            <p>
                The web hates me is based on wordpress. That means, that the main feature like creating a blog post or a page should work
                by default. The templates for the homepage, the posts and the pages where created from the scratch as well as some wordpress
                plugins.
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
                            The homepage shows the header, the footer and 20 article teasers, a facebook block and a list of the most
                            popular authors.
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            On every index page there are 21 article teasers.
                        </td>
                        <td>
                            XPath Exists <span class="value">//article[contains(@id, "post-")] equals 21</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The list of authors is static and is limited to four persons. Therefore we only check for existence
                            of the last author.
                        </td>
                        <td>
                            Text present <span class="value">Mike Lohmann</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The facebook integration is done via the default facebook widget which is implemented via
                            a small javscript include. We believe that the integration works if the javascript file from
                            facebook is loaded.
                        </td>
                        <td>
                            MissingRequest <span class="value">https://connect.facebook.net/en_US/all.js</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The footer is generated dynamically via wordpress. Therefore we only check if it is
                            configured correct by looking for a text that is part of the footer. This check is
                            processed on every page.
                        </td>
                        <td>
                            Text present <span class="value">Impressum</span>
                        </td>
                    </tr>

                    <tr style="border-top: 1px solid #f9f9f9;">
                        <td>Blog post</td>
                        <td>
                            Every blog post consists of a headline, a text, comments, a sidebar and recommended articles. For
                            testing purposes we created a special test post.
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The headline's text is "headline" so we searched for that string. Additionally we put a unique
                            word into the article text. This can also be used to test the search results.
                        </td>
                        <td>
                            Text present <span class="value">Headline</span>
                            Text present <span class="value">Unique String</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The recommended systems are standard article teaser elements as seen on the home page.
                        </td>
                        <td>
                            XPath exists <span class="value">//article[contains(@id, "post-")] equals 3</span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            The comment section was only styled via css. Therefore we only test if the comment textbox is
                            available.
                        </td>
                        <td>
                            Css Selector <span class="value">textarea</span>
                        </td>
                    </tr>

                    <tr style="border-top: 1px solid #f9f9f9;">
                        <td>Search</td>
                        <td>
                            The search page is powered by wordpress and was not changed. No tests are needed here as the
                            rendering is already tested within the home page.
                        </td>
                        <td>

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
                This blog is based on a stable foundation which means there are no additional checks needed.
            </p>
        </div>
    </div>
</div>
