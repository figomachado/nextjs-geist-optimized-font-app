<?php

return [
    // Navigation & Menu
    'dashboard' => 'Dashboard',
    'inventory' => 'Inventory',
    'medicines' => 'Medicines',
    'suppliers' => 'Suppliers',
    'purchases' => 'Purchases',
    'prescriptions' => 'Prescriptions',
    'reports' => 'Reports',
    'settings' => 'Settings',

    // Actions
    'create' => 'Create',
    'edit' => 'Edit',
    'delete' => 'Delete',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'confirm' => 'Confirm',
    'back' => 'Back',
    'search' => 'Search',
    'filter' => 'Filter',
    'print' => 'Print',
    'export' => 'Export',

    // Status
    'status' => 'Status',
    'active' => 'Active',
    'inactive' => 'Inactive',
    'pending' => 'Pending',
    'approved' => 'Approved',
    'rejected' => 'Rejected',
    'completed' => 'Completed',
    'cancelled' => 'Cancelled',

    // Common Terms
    'name' => 'Name',
    'code' => 'Code',
    'description' => 'Description',
    'quantity' => 'Quantity',
    'price' => 'Price',
    'date' => 'Date',
    'notes' => 'Notes',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'created_by' => 'Created By',
    'updated_by' => 'Updated By',

    // Messages
    'success_create' => 'Data created successfully',
    'success_update' => 'Data updated successfully',
    'success_delete' => 'Data deleted successfully',
    'confirm_delete' => 'Are you sure you want to delete this data?',
    'error_occurred' => 'An error occurred',
    'not_found' => 'Data not found',
    'access_denied' => 'Access denied',

    // Language Settings
    'language_switcher' => 'Select Language',
    'language_changed' => 'Language changed successfully',
    'language' => [
        'id' => 'Indonesian',
        'en' => 'English',
        'tet' => 'Tetun',
        'pt' => 'Portuguese',
    ],

    // Medicine Specific
    'medicine' => [
        'label' => 'Medicine',
        'plural_label' => 'Medicines',
        'navigation_label' => 'Medicines',
        'name' => 'Medicine Name',
        'description' => 'Description',
        'instructions' => 'Instructions',
        'side_effects' => 'Side Effects',
        'generic_name' => 'Generic Name',
        'category' => 'Category',
        'unit' => 'Unit',
        'min_stock' => 'Minimum Stock',
        'max_stock' => 'Maximum Stock',
        'reorder_point' => 'Reorder Point',
        'current_stock' => 'Current Stock',
        'manufacturer' => 'Manufacturer',
        'storage_location' => 'Storage Location',
        'expiry_date' => 'Expiry Date',
        'batch_number' => 'Batch Number',
        'registration_number' => 'Registration Number',
        'purchase_price' => 'Purchase Price',
        'selling_price' => 'Selling Price',
        'code' => 'Code',
        'categories' => [
            'otc' => 'Over The Counter',
            'prescription' => 'Prescription Only',
            'controlled' => 'Controlled',
            'narcotic' => 'Narcotic',
            'psychotropic' => 'Psychotropic',
        ],
        'filters' => [
            'low_stock' => 'Low Stock',
            'expiring_soon' => 'Expiring Soon',
        ],
        'image' => 'Medicine Image',
    ],

    'navigation' => [
        'inventory_management' => 'Inventory Management',
    ],

    // Prescription Specific
    'prescription' => [
        'number' => 'Prescription Number',
        'date' => 'Prescription Date',
        'patient_name' => 'Patient Name',
        'patient_id' => 'Patient ID',
        'doctor_name' => 'Doctor Name',
        'diagnosis' => 'Diagnosis',
        'instructions' => 'Instructions',
        'total_amount' => 'Total Amount',
        'insurance_coverage' => 'Insurance Coverage',
        'patient_payment' => 'Patient Payment',
    ],

    // Inventory Specific
    'inventory' => [
        'stock_level' => 'Stock Level',
        'minimum_stock' => 'Minimum Stock',
        'maximum_stock' => 'Maximum Stock',
        'reorder_point' => 'Reorder Point',
        'batch_number' => 'Batch Number',
        'expiry_date' => 'Expiry Date',
        'location' => 'Storage Location',
    ],
];
