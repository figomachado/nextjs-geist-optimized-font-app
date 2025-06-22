<?php

return [
    // Navigation & Menu
    'dashboard' => 'Painel',
    'inventory' => 'Inventário',
    'medicines' => 'Medicamentos',
    'suppliers' => 'Fornecedores',
    'purchases' => 'Compras',
    'prescriptions' => 'Prescrições',
    'reports' => 'Relatórios',
    'settings' => 'Configurações',

    // Actions
    'create' => 'Criar',
    'edit' => 'Editar',
    'delete' => 'Excluir',
    'save' => 'Salvar',
    'cancel' => 'Cancelar',
    'confirm' => 'Confirmar',
    'back' => 'Voltar',
    'search' => 'Pesquisar',
    'filter' => 'Filtrar',
    'print' => 'Imprimir',
    'export' => 'Exportar',

    // Status
    'status' => 'Status',
    'active' => 'Ativo',
    'inactive' => 'Inativo',
    'pending' => 'Pendente',
    'approved' => 'Aprovado',
    'rejected' => 'Rejeitado',
    'completed' => 'Concluído',
    'cancelled' => 'Cancelado',

    // Common Terms
    'name' => 'Nome',
    'code' => 'Código',
    'description' => 'Descrição',
    'quantity' => 'Quantidade',
    'price' => 'Preço',
    'date' => 'Data',
    'notes' => 'Notas',
    'created_at' => 'Criado em',
    'updated_at' => 'Atualizado em',
    'created_by' => 'Criado por',
    'updated_by' => 'Atualizado por',

    // Messages
    'success_create' => 'Dados criados com sucesso',
    'success_update' => 'Dados atualizados com sucesso',
    'success_delete' => 'Dados excluídos com sucesso',
    'confirm_delete' => 'Tem certeza que deseja excluir estes dados?',
    'error_occurred' => 'Ocorreu um erro',
    'not_found' => 'Dados não encontrados',
    'access_denied' => 'Acesso negado',

    // Language Settings
    'language_switcher' => 'Selecionar Idioma',
    'language' => [
        'id' => 'Indonésio',
        'en' => 'Inglês',
        'tet' => 'Tétum',
        'pt' => 'Português',
    ],

    // Medicine Specific
    'medicine' => [
        'label' => 'Medicamento',
        'plural_label' => 'Medicamentos',
        'navigation_label' => 'Medicamentos',
        'name' => 'Nome do Medicamento',
        'description' => 'Descrição',
        'instructions' => 'Instruções',
        'side_effects' => 'Efeitos Colaterais',
        'generic_name' => 'Nome Genérico',
        'category' => 'Categoria',
        'unit' => 'Unidade',
        'min_stock' => 'Estoque Mínimo',
        'max_stock' => 'Estoque Máximo',
        'reorder_point' => 'Ponto de Reposição',
        'current_stock' => 'Estoque Atual',
        'manufacturer' => 'Fabricante',
        'storage_location' => 'Local de Armazenamento',
        'expiry_date' => 'Data de Validade',
        'batch_number' => 'Número do Lote',
        'registration_number' => 'Número de Registro',
        'purchase_price' => 'Preço de Compra',
        'selling_price' => 'Preço de Venda',
        'code' => 'Código',
        'categories' => [
            'otc' => 'Venda Livre',
            'prescription' => 'Sob Prescrição',
            'controlled' => 'Controlado',
            'narcotic' => 'Narcótico',
            'psychotropic' => 'Psicotrópico',
        ],
        'filters' => [
            'low_stock' => 'Estoque Baixo',
            'expiring_soon' => 'Próximo ao Vencimento',
        ],
        'image' => 'Imagem do Medicamento',
    ],

    'navigation' => [
        'inventory_management' => 'Gestão de Inventário',
    ],
];
