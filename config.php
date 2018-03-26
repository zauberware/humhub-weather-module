<?php
use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'weather',
    'class' => 'humhub\modules\weather\Module',
    'namespace' => 'humhub\modules\weather',
    'events' => [
        [
            'class' => Sidebar::className(), 
            'event' => Sidebar::EVENT_INIT, 
            'callback' => ['humhub\modules\weather\Events', 'onDashboardSidebarInit']
        ]
    ]
];
?>
