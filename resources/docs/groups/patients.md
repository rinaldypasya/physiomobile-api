# Patients


## Create a new patient.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key." \
    -d '{"name":"accusantium","id_type":"omnis","id_no":"esse","gender":"aut","dob":"1990-01-01","address":"accusamus","medium_acquisition":"minus"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (201):

```json

{
  "id": 1,
  "user_id": 5,
  "medium_acquisition": "referral",
  ...
}
```
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


## Update an existing patient.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/patients/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key." \
    -d '{"name":"possimus","id_type":"consequatur","id_no":"quia","gender":"ab","dob":"1990-01-01","address":"beatae","medium_acquisition":"cupiditate"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json

{
  "message": "Patient updated successfully",
  ...
}
```
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


## Delete a patient.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/patients/5" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (204):

```json
<Empty response>
```
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


## Get a list of all patients.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json

[
  {
    "id": 1,
    "user_id": 5,
    "medium_acquisition": "referral",
    ...
  }
]
```
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


## Get details of a specific patient.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/patients/14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "accessKey: required Your API access key."
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json

{
  "id": 1,
  "user_id": 5,
  "medium_acquisition": "referral",
  ...
}
```
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



