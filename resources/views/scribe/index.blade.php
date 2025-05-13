<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Physiomobile Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 13 2025</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.10.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Patients</h1>
<h2>Create a new patient.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key." \
    -d '{"name":"accusantium","id_type":"omnis","id_no":"esse","gender":"aut","dob":"1990-01-01","address":"accusamus","medium_acquisition":"minus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "accessKey": "required Your API access key.",
};

let body = {
    "name": "accusantium",
    "id_type": "omnis",
    "id_no": "esse",
    "gender": "aut",
    "dob": "1990-01-01",
    "address": "accusamus",
    "medium_acquisition": "minus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">
{
  "id": 1,
  "user_id": 5,
  "medium_acquisition": "referral",
  ...
}</code></pre>
<div id="execution-results-POSTapi-patients" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-patients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-patients"></code></pre>
</div>
<div id="execution-error-POSTapi-patients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-patients"></code></pre>
</div>
<form id="form-POSTapi-patients" data-method="POST" data-path="api/patients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","accessKey":"required Your API access key."}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-patients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-patients" onclick="tryItOut('POSTapi-patients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-patients" onclick="cancelTryOut('POSTapi-patients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-patients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/patients</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
The full name of the patient.
</p>
<p>
<b><code>id_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id_type" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
The type of ID (e.g. ktp, passport).
</p>
<p>
<b><code>id_no</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id_no" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
The identification number.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
Male or female.
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
Date of birth in Y-m-d format.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
Patient's address.
</p>
<p>
<b><code>medium_acquisition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medium_acquisition" data-endpoint="POSTapi-patients" data-component="body" required  hidden>
<br>
How the patient was acquired (e.g., online, referral).
</p>

</form>
<h2>Update an existing patient.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/patients/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key." \
    -d '{"name":"possimus","id_type":"consequatur","id_no":"quia","gender":"ab","dob":"1990-01-01","address":"beatae","medium_acquisition":"cupiditate"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/patients/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "accessKey": "required Your API access key.",
};

let body = {
    "name": "possimus",
    "id_type": "consequatur",
    "id_no": "quia",
    "gender": "ab",
    "dob": "1990-01-01",
    "address": "beatae",
    "medium_acquisition": "cupiditate"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  "message": "Patient updated successfully",
  ...
}</code></pre>
<div id="execution-results-PUTapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-patients--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-patients--id-"></code></pre>
</div>
<form id="form-PUTapi-patients--id-" data-method="PUT" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","accessKey":"required Your API access key."}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-patients--id-" onclick="tryItOut('PUTapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-patients--id-" onclick="cancelTryOut('PUTapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-patients--id-" data-component="url" required  hidden>
<br>
The ID of the patient.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
The full name of the patient.
</p>
<p>
<b><code>id_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id_type" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
The type of ID.
</p>
<p>
<b><code>id_no</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id_no" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
The identification number.
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
Male or female.
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
Date of birth.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
Patient's address.
</p>
<p>
<b><code>medium_acquisition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medium_acquisition" data-endpoint="PUTapi-patients--id-" data-component="body" required  hidden>
<br>
Acquisition method.
</p>

</form>
<h2>Delete a patient.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/patients/5" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/patients/5"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "accessKey": "required Your API access key.",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (204):</p>
</blockquote>
<pre><code class="language-json">&lt;Empty response&gt;</code></pre>
<div id="execution-results-DELETEapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-patients--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-patients--id-"></code></pre>
</div>
<form id="form-DELETEapi-patients--id-" data-method="DELETE" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","accessKey":"required Your API access key."}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-patients--id-" onclick="tryItOut('DELETEapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-patients--id-" onclick="cancelTryOut('DELETEapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-patients--id-" data-component="url" required  hidden>
<br>
The ID of the patient.
</p>
</form>
<h2>Get a list of all patients.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "accessKey": "required Your API access key.",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
[
  {
    "id": 1,
    "user_id": 5,
    "medium_acquisition": "referral",
    ...
  }
]</code></pre>
<div id="execution-results-GETapi-patients" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients"></code></pre>
</div>
<div id="execution-error-GETapi-patients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients"></code></pre>
</div>
<form id="form-GETapi-patients" data-method="GET" data-path="api/patients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","accessKey":"required Your API access key."}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patients" onclick="tryItOut('GETapi-patients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patients" onclick="cancelTryOut('GETapi-patients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients</code></b>
</p>
</form>
<h2>Get details of a specific patient.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/patients/14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/patients/14"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "accessKey": "required Your API access key.",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  "id": 1,
  "user_id": 5,
  "medium_acquisition": "referral",
  ...
}</code></pre>
<div id="execution-results-GETapi-patients--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-patients--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-patients--id-"></code></pre>
</div>
<div id="execution-error-GETapi-patients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-patients--id-"></code></pre>
</div>
<form id="form-GETapi-patients--id-" data-method="GET" data-path="api/patients/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","accessKey":"required Your API access key."}' onsubmit="event.preventDefault(); executeTryOut('GETapi-patients--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-patients--id-" onclick="tryItOut('GETapi-patients--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-patients--id-" onclick="cancelTryOut('GETapi-patients--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-patients--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/patients/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-patients--id-" data-component="url" required  hidden>
<br>
The ID of the patient.
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>