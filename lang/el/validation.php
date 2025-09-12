<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

'accepted_if' => 'Το πεδίο :attribute πρέπει να γίνει αποδεκτό όταν :other είναι :value.',
    'accepted' => 'Το πεδίο :attribute πρέπει να γίνει αποδεκτό.',
    'active_url' => 'Το πεδίο :attribute δεν είναι έγκυρο URL.',
    'after' => 'Το πεδίο :attribute πρέπει να είναι μια ημερομηνία μετά την :date.',
    'after_or_equal' => 'Το πεδίο :attribute πρέπει να είναι μια ημερομηνία μετά ή ίση με την :date.',
    'alpha' => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash' => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς, παύλες και κάτω παύλες.',
    'alpha_num' => 'Το πεδίο :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'any_of' => 'Το πεδίο :attribute είναι άκυρο.',
    'array' => 'Το πεδίο :attribute πρέπει να είναι πίνακας.',
    'ascii' => 'Το πεδίο :attribute μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες.',
    'before' => 'Το πεδίο :attribute πρέπει να είναι μια ημερομηνία πριν από την :date.',
    'before_or_equal' => 'Το πεδίο :attribute πρέπει να είναι μια ημερομηνία πριν ή ίση με την :date.',
    'between' => [
        'array' => 'Το πεδίο :attribute πρέπει να έχει μεταξύ :min και :max αντικειμένων.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρων.',
    ],
    'boolean' => 'Το πεδίο :attribute πρέπει να είναι αληθές ή ψευδές.',
    'can' => 'Το πεδίο :attribute περιέχει μη εξουσιοδοτημένη τιμή.',
    'confirmed' => 'Η επιβεβαίωση του πεδίου :attribute δεν ταιριάζει.',
    'contains' => 'Το πεδίο :attribute πρέπει να περιέχει :values.',
    'current_password' => 'Ο κωδικός πρόσβασης είναι λανθασμένος.',
    'date' => 'Το πεδίο :attribute δεν είναι έγκυρη ημερομηνία.',
    'date_equals' => 'Το πεδίο :attribute πρέπει να είναι μια ημερομηνία ίση με την :date.',
    'date_format' => 'Το πεδίο :attribute δεν ταιριάζει με τη μορφή :format.',
    'decimal' => 'Το πεδίο :attribute πρέπει να έχει :decimal δεκαδικά ψηφία.',
    'declined' => 'Το πεδίο :attribute πρέπει να απορριφθεί.',
    'declined_if' => 'Το πεδίο :attribute πρέπει να απορριφθεί όταν :other είναι :value.',
    'different' => 'Τα πεδία :attribute και :other πρέπει να είναι διαφορετικά.',
    'digits' => 'Το πεδίο :attribute πρέπει να είναι :digits ψηφία.',
    'digits_between' => 'Το πεδίο :attribute πρέπει να είναι μεταξύ :min και :max ψηφίων.',
    'dimensions' => 'Το πεδίο :attribute έχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct' => 'Το πεδίο :attribute έχει διπλή τιμή.',
    'doesnt_contain' => 'Το πεδίο :attribute δεν πρέπει να περιέχει :values.',
    'doesnt_end_with' => 'Το πεδίο :attribute δεν πρέπει να τελειώνει με μία από τις ακόλουθες τιμές: :values.',
    'doesnt_start_with' => 'Το πεδίο :attribute δεν πρέπει να ξεκινά με μία από τις ακόλουθες τιμές: :values.',
    'email' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση email.',
    'ends_with' => 'Το πεδίο :attribute πρέπει να τελειώνει με μία από τις ακόλουθες τιμές: :values.',
    'enum' => 'Το πεδίο :attribute είναι άκυρο.',
    'exists' => 'Το επιλεγμένο πεδίο :attribute είναι άκυρο.',
    'extension' => 'Το πεδίο :attribute πρέπει να είναι αρχείο με επέκταση: :values.',
    'file' => 'Το πεδίο :attribute πρέπει να είναι αρχείο.',
    'filled' => 'Το πεδίο :attribute πρέπει να έχει τιμή.',
    'gt' => [
        'array' => 'Το πεδίο :attribute πρέπει να έχει περισσότερα από :value αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο από :value χαρακτήρες.',
    ],
    'gte' => [
        'array' => 'Το πεδίο :attribute πρέπει να έχει :value ή περισσότερα αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι μεγαλύτερο ή ίσο με :value χαρακτήρες.',
    ],
    'hex_color' => 'Το πεδίο :attribute πρέπει να είναι έγκυρο εξάγωνο χρώμα.',
    'image' => 'Το πεδίο :attribute πρέπει να είναι εικόνα.',
    'in' => 'Το επιλεγμένο πεδίο :attribute είναι άκυρο.',
    'in_array' => 'Το πεδίο :attribute δεν υπάρχει στο :other.',
    'in_array_keys' => 'Το πεδίο :attribute πρέπει να περιέχει έγκυρα κλειδιά για :values.',
    'integer' => 'Το πεδίο :attribute πρέπει να είναι ακέραιος αριθμός.',
    'ip' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση IP.',
    'ipv4' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση IPv4.',
    'ipv6' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση IPv6.', 
    'json' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη συμβολοσειρά JSON.',
    'list' => 'Το πεδίο :attribute πρέπει να είναι λίστα.',
    'lowercase' => 'Το πεδίο :attribute πρέπει να είναι με πεζά γράμματα.',
    'lt' => [
        'array' => 'Το πεδίο :attribute πρέπει να έχει λιγότερα από :value αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο από :value kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο από :value.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο από :value χαρακτήρες.',
    ],
    'lte' => [
        'array' => 'Το πεδίο :attribute δεν πρέπει να έχει περισσότερα από :value αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο ή ίσο με :value kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο ή ίσο με :value.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι μικρότερο ή ίσο με :value χαρακτήρες.',
    ],
    'mac_address' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη διεύθυνση MAC.',
    'max' => [
        'array' => 'Το πεδίο :attribute δεν πρέπει να έχει περισσότερα από :max αντικείμενα.',
        'file' => 'Το πεδίο :attribute δεν πρέπει να είναι μεγαλύτερο από :max kilobytes.',
        'numeric' => 'Το πεδίο :attribute δεν πρέπει να είναι μεγαλύτερο από :max.',
        'string' => 'Το πεδίο :attribute δεν πρέπει να είναι μεγαλύτερο από :max χαρακτήρες.',
    ],
    'max_digits' => 'Το πεδίο :attribute δεν πρέπει να έχει περισσότερα από :max ψηφία.',
    'mimes' => 'Το πεδίο :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'mimetypes' => 'Το πεδίο :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'min' => [
        'array' => 'Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
    ],
    'min_digits' => 'Το πεδίο :attribute πρέπει να έχει τουλάχιστον :min ψηφία.',
    'missing' => 'Το πεδίο :attribute πρέπει να λείπει.',
    'missing_if' => 'Το πεδίο :attribute πρέπει να λείπει όταν :other είναι :value.',
    'missing_unless' => 'Το πεδίο :attribute πρέπει να λείπει εκτός αν :other είναι :value.',
    'missing_with' => 'Το πεδίο :attribute πρέπει να λείπει όταν υπάρχουν :values.',
    'missing_with_all' => 'Το πεδίο :attribute πρέπει να λείπει όταν υπάρχουν όλα τα :values.',
    'multiple_of' => 'Το πεδίο :attribute πρέπει να είναι πολλαπλάσιο του :value.',
    'not_in' => 'Το επιλεγμένο πεδίο :attribute είναι άκυρο.',
    'not_regex' => 'Η μορφή του πεδίου :attribute είναι άκυρη.',
    'numeric' => 'Το πεδίο :attribute πρέπει να είναι αριθμός.',
    'password' => [
        'letters' => 'Το πεδίο :attribute πρέπει να περιέχει τουλάχιστον ένα γράμμα.',
        'mixed' => 'Το πεδίο :attribute πρέπει να περιέχει τουλάχιστον ένα κεφαλαίο και ένα πεζό γράμμα.',
        'numbers' => 'Το πεδίο :attribute πρέπει να περιέχει τουλάχιστον έναν αριθμό.',
        'symbols' => 'Το πεδίο :attribute πρέπει να περιέχει τουλάχιστον ένα σύμβολο.',
        'uncompromised' => 'Το δοσμένο πεδίο :attribute έχει εμφανιστεί σε διαρροές δεδομένων. Παρακαλώ επιλέξτε ένα διαφορετικό :attribute.',
    ],
    'present' => 'Το πεδίο :attribute πρέπει να υπάρχει.',
    'present_if' => 'Το πεδίο :attribute πρέπει να υπάρχει όταν :other είναι :value.',
    'present_unless' => 'Το πεδίο :attribute πρέπει να υπάρχει εκτός αν :other είναι :value.',
    'present_with' => 'Το πεδίο :attribute πρέπει να υπάρχει όταν υπάρχουν :values.',
    'present_with_all' => 'Το πεδίο :attribute πρέπει να υπάρχει όταν υπάρχουν όλα τα :values.',
    'prohibited' => 'Το πεδίο :attribute απαγορεύεται.',
    'prohibited_if' => 'Το πεδίο :attribute απαγορεύεται όταν :other είναι :value.',
    'prohibited_if_accepted' => 'Το πεδίο :attribute απαγορεύεται όταν το πεδίο :other είναι αποδεκτό.',
    'prohibited_if_declined' => 'Το πεδίο :attribute απαγορεύεται όταν το πεδίο :other απορριφθεί.',
    'prohibited_unless' => 'Το πεδίο :attribute απαγορεύεται εκτός αν :other είναι :value.',
    'prohibits' => 'Το πεδίο :attribute απαγορεύει την παρουσία του :other.',
    'regex' => 'Η μορφή του πεδίου :attribute είναι άκυρη.',
    'required' => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'required_array_keys' => 'Το πεδίο :attribute πρέπει να περιέχει καταχωρήσεις για: :values.',
    'required_if' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν :other είναι :value.',
    'required_if_accepted' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν το πεδίο :other είναι αποδεκτό.',
    'required_if_declined' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν το πεδίο :other απορριφθεί.',
    'required_unless' => 'Το πεδίο :attribute είναι υποχρεωτικό εκτός αν :other είναι :value.',
    'required_with' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν υπάρχουν :values.',
    'required_with_all' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν υπάρχουν όλα τα :values.',
    'required_without' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν δεν υπάρχουν :values.',
    'required_without_all' => 'Το πεδίο :attribute είναι υποχρεωτικό όταν δεν υπάρχει κανένα από τα :values.',
    'same' => 'Τα πεδία :attribute και :other πρέπει να ταιριάζουν.',
    'size' => [
        'array' => 'Το πεδίο :attribute πρέπει να περιέχει :size αντικείμενα.',
        'file' => 'Το πεδίο :attribute πρέπει να είναι :size kilobytes.',
        'numeric' => 'Το πεδίο :attribute πρέπει να είναι :size.',
        'string' => 'Το πεδίο :attribute πρέπει να είναι :size χαρακτήρες.',
    ],
    'starts_with' => 'Το πεδίο :attribute πρέπει να ξεκινά με μία από τις ακόλουθες τιμές: :values.',
    'string' => 'Το πεδίο :attribute πρέπει να είναι συμβολοσειρά.',
    'timezone' => 'Το πεδίο :attribute πρέπει να είναι έγκυρη ζώνη ώρας.',
    'ulid' => 'Το πεδίο :attribute πρέπει να είναι έγκυρο ULID.',
    'unique' => 'Το πεδίο :attribute έχει ήδη ληφθεί.',
    'uploaded' => 'Η μεταφόρτωση του πεδίου :attribute απέτυχε.',
    'uppercase' => 'Το πεδίο :attribute πρέπει να είναι με κεφαλαία γράμματα.',
    'url' => 'Η μορφή του πεδίου :attribute είναι άκυρη.',
    'uuid' => 'Το πεδίο :attribute πρέπει να είναι έγκυρο UUID.',
    'ulid' => 'Το πεδίο :attribute πρέπει να είναι έγκυρο ULID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
