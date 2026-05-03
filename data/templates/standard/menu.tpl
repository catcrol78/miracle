{foreach $mainMenu as $menuItem}
<a href="{#pagesUrl#}/{$menuItem->getReference()}.html">{$menuItem->getTitle()}</a>
{/foreach}