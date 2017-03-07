<?php

return [

    /**
     * Definicoes do Model.
     * Se você quiser usar seu próprio modelo e estendê-lo
     * Ao modelo do pacote. Você pode definir seu modelo aqui.
     */

    'role'       => 'Kodeine\Acl\Models\Eloquent\Role',
    'permission' => 'Kodeine\Acl\Models\Eloquent\Permission',

    /**
     * Most Permissive Wins right
     * Se você tiver vários aliases de permissão atribuídos, cada alias
     * Tem uma permissão comum, view.house => false, mas um alias
     * Tem ele definido como true. Se este direito estiver ativado, o valor true
     * wins the race, ie the most permissive wins.
     */

    'most_permissive_wins'       => false,

    /**
     * Cache Minutes
     * Set the minutes that roles and permissions will be cached.
     */
		
    'cacheMinutes' => 1,
];
