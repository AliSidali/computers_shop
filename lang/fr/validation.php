<?php

return [

    'accepted' => 'Ce champ doit être accepté.',
    'active_url' => "Ce champ n'est pas une URL valide.",
    'after' => 'La date doit être postérieure à :date.',
    'alpha' => 'Ce champ ne peut contenir que des lettres.',
    'alpha_num' => 'Ce champ ne peut contenir que des lettres et des chiffres.',
    'array' => 'Ce champ doit être un tableau.',
    'before' => 'La date doit être antérieure à :date.',
    'between' => [
        'numeric' => 'La valeur doit être comprise entre :min et :max.',
        'file' => 'Le fichier doit faire entre :min et :max kilo-octets.',
        'string' => 'Le texte doit contenir entre :min et :max caractères.',
        'array' => 'Le tableau doit contenir entre :min et :max éléments.',
    ],
    'boolean' => 'Ce champ doit être vrai ou faux.',
    'confirmed' => 'La confirmation ne correspond pas.',
    'email' => 'L’adresse e-mail n’est pas valide.',
    'required' => 'Ce champ est requis.',
    'string' => 'Ce champ doit être une chaîne de caractères.',
    'unique' => 'Cette valeur est déjà utilisée.',
    'min' => [
        'string' => 'Le texte doit contenir au moins :min caractères.',
    ],
    'max' => [
        'string' => 'Le texte ne peut pas dépasser :max caractères.',
    ],

    // You can add more as needed...

    'attributes' => [
        'email' => 'adresse e-mail',
        'password' => 'mot de passe',
        'name' => 'nom',
        // Map your field names to user-friendly labels
    ],

];
