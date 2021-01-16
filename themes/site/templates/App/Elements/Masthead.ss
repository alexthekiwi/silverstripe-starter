<% if $File %>
    <span>
        $File
    </span>
<% end_if %>
<div>
    <% if $Title && $ShowTitle %>
        <h1>$Title</h1>
    <% end_if %>

    $Content

    <% if $CallToActionLink.Page.Link %>
        <div>
        <% with $CallToActionLink %>
            <a href="{$Page.Link}" class="banner-element__call-to-action"
                <% if $TargetBlank %>target="_blank"<% end_if %>
                <% if $Description %>title="{$Description.ATT}"<% end_if %>>
                {$Text.XML}
            </a>
        <% end_with %>
        </div>
    <% end_if %>
</div>
