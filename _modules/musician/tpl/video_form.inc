[FORM|name=video_form:
[INPUT|title=Nome del video|id=edit_title|required|name=edit-title|value={ATTRIBUTE|name=title|no_qtags}:video_form]
<br />
[INPUT|wysiwyg=true|title=Descrizione del video|id=edit_content|required|name=edit-content|type=text|value={ATTRIBUTE|name=body|no_qtags}:video_form]
<br />

[INPUT|title=Link ai Video Youtube|name=video|type=string|value={JSON_ATTRIBUTE|name=video}:video_form]
<div class="shadow-description">Inserisci il link al video Youtube. Includi il link completo di protocollo HTTP / HTTPS</div>

]
