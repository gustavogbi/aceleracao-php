<?php

function emailActiveClients(array $clients): void {
    $activeClients = activeClients($clients);
    foreach ($activeClients as $activeClient) {
        email($activeClient);
    }
}

function activeClients(): array {
    return $db->find('active clients');
}

?>