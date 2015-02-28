<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'accueil' => 
  array (
    'accueil.catalogue.chemin' => 'CATALOGUE',
    'accueil.catalogue.titre' => 'Catalogue',
    'accueil.retrouveznous' => 'Find us',
    'accueil.lien.facebook' => 'https://www.facebook.com/LaMaltiere',
    'accueil.lien.googeplus' => 'https://plus.google.com/u/0/102699585695842133884/posts',
    'accueil.lien.pinterest' => 'http://www.pinterest.com/lamaltiere/',
    'accueil.lien.instagram' => 'http://instagram.com/la_maltiere/',
    'accueil.lien.youtube' => 'http://www.youtube.com/user/TheMaltiere',
    'accueil.lien.flickr' => 'https://www.flickr.com/photos/lamaltiere/',
    'accueil.entreprise.titre' => 'Presentation of the company',
    'accueil.entreprise.lienvideoyoutube' => '//www.youtube.com/embed/Ut3dfdRX-xI',
    'accueil.entreprise.texte.denomination' => 'LA MALTIERE',
    'accueil.entreprise.texte.phrase1' => 'is a specialized small factory using experienced craftsmen manufacturing all-welded fishing boats.',
    'accueil.entreprise.texte.phrase2' => 'Our boats can be customized according to the customers requirements.',
    'accueil.entreprise.texte.phrase3' => 'Our boats are sold in France, Belgium, Switzerland (Swiss), Cameroon, New Caledonia, Vietnam, Niger, Maroc, Congo, Saint Barth (Antilles). They are approved to E.U. standards and can be registrered in category D.',
    'accueil.entreprise.texte.longeur' => 'Length : From 2.70 m to 5.00 m',
    'accueil.entreprise.texte.poids' => 'Weight : From 31 Kg to 85 Kg',
    'accueil.entreprise.texte.prix' => 'From',
    'accueil.entreprise.image.fabrication' => 'French craft manufacturing',
    'accueil.entreprise.image.transport' => 'Easy to transport - Light',
    'accueil.entreprise.image.modifiable' => 'Fully customizable',
    'accueil.entreprise.image.stabilite' => 'Unrivaled stability',
    'accueil.travauxsoudure.titre' => 'Welding realisations',
  ),
  'barqueRemorque' => 
  array (
    'barque.caracteristique.principal.titre' => 'Detailed description of an aluminium boat',
    'barque.caracteristique.technique.titre' => 'Design Features',
    'barque.caracteristique.technique.contenu' => 'Flat-bottomed hull , cutting, assembly, shaping, welded out of high strength aluminium and sealed with silicon. 
                        All our boats are entirely manufactured by ourselves.

                        2 mm thickness hull bottom with protection reinforcements.
                        Ribbed sides 1,5 mm thick.
                        Wooden 2 mm transom at the near to provide reinforcement for the motor mount.
                        Storage chest with flotation.',
    'barque.caracteristique.stabilite.titre' => 'Stability tests',
    'barque.caracteristique.equipement.titre' => 'Equipments',
    'barque.caracteristique.equipement.contenu' => 'Rear storage chest with a strong latch which can be padlocked. Seats covered with marine polywood. Pulleys and mooring attachments. Attaching points for various equipment. Wood oars with brass rowlocks. Rowlock supports in bronze.',
    'barque.caracteristique.remarques.titre' => 'Notes',
    'barque.caracteristique.remarques.contenu' => 'All our boats are made on demand, and apart from the shape of the boat, most modifications can be made at your request. All the modifications seen on this site are examples of customers\' customizations. Charge data as an indication for a draught of 10 cm.',
    'remorque.pam.titre' => 'Les trailers - Pam Rocca Nautilus A.I.N',
    'remorque.pam.contenu' => 'To add the following options :',
    'remorque.pam.contenu.rouesecours' => 'spare tire',
    'remorque.pam.contenu.supportroue' => 'wheel holder',
    'remorque.pam.contenu.autres' => '- Key Theft - etc... please contact us.',
    'remorque.caracteristique.titre' => 'Detailed description of a trailer',
    'slider.bouton.precedent' => 'Prev.',
    'slider.bouton.suivant' => 'Next',
    'barque.label.capacite' => 'Capacity',
    'barque.label.moteur' => 'Engine',
    'barque.label.longueur' => 'Length',
    'barque.label.largeur' => 'Width',
    'barque.label.hauteur' => 'Height',
    'barque.label.poids' => 'Weight',
    'barque.label.charge' => 'Load',
    'remorque.label.chargeutile' => 'Payload*',
    'remorque.label.ptc' => 'PTC',
    'remorque.label.longueurbateau' => 'Length boat',
    'remorque.label.longueurremorque' => 'Length trailer*',
    'remorque.label.largeurremorque' => 'Width trailer*',
    'remorque.label.nbrouleaux' => 'Roller number',
    'remorque.label.roues' => 'Wheels',
    'remorque.message.caracteristique' => 'These characteristics vary depending on the version of the boat',
  ),
  'contact' => 
  array (
    'contact.titre' => 'Contact us',
    'contact.telecharger.catalogue' => 'Download our catalogue and order form',
    'contact.catalogue.titre' => 'Catalogue',
    'contact.boncommande.titre' => 'Order from',
    'contact.boncommande.phrase1' => 'Fill the order form and send it back to SAS LA MALTIERE.',
    'contact.boncommande.phrase2' => 'For any prices or additional information about our products please contact us.',
  ),
  'magasin' => 
  array (
    'magasin.moteur.titre' => 'Sale of engines and echo sounders, contact us',
    'magasin.panier.titre' => 'My cart',
    'magasin.panier.vide' => 'Your cart is empty.',
    'magasin.panier.commandevalidee' => 'Your order has been sent to La Maltière.',
    'magasin.panier.emailenvoye' => 'An email summary has been sent on the email address :',
    'magasin.panier.recapitulatif' => 'Summary of articles',
    'magasin.panier.produit' => 'Product',
    'magasin.panier.quantite' => 'Quantity',
    'magasin.panier.prixunitaire' => 'Unit price',
    'magasin.panier.total' => 'Total',
    'magasin.panier.msgtotal' => 'Total of your order',
    'magasin.panier.fraisport' => 'Including shipping costs',
    'magasin.retour.magasin' => 'Back to shop',
    'magasin.bouton.commander' => 'Order',
    'detailmagasin.bouton.ajouterpanier' => 'Add in the cart',
    'detailmagasin.message.indisponible' => 'To order this product, thanks to contact us.',
    'detailmagasin.message.quantite' => 'Quantity',
    'confirmation.commande.titre' => 'Completion of the order',
    'confirmation.commande.civilite' => 'Civility',
    'confirmation.commande.civilite.monsieur' => 'Mr',
    'confirmation.commande.civilite.madame' => 'Mrs',
    'confirmation.commande.nom' => 'Surname',
    'confirmation.commande.prenom' => 'First name',
    'confirmation.commande.adresse' => 'Address',
    'confirmation.commande.codepostal' => 'Postal code',
    'confirmation.commande.ville' => 'City',
    'confirmation.commande.pays' => 'Country',
    'confirmation.commande.telephone' => 'Phone number',
    'confirmation.commande.email' => 'Email address',
    'confirmation.commande.bouton.valider' => 'Confirm the order',
  ),
  'medias' => 
  array (
    'medias.photosclients.titre' => 'Space pictures customers',
    'medias.4000G.titre' => 'Pictures 4000G en action',
    'medias.videolamaltiere.titre' => 'Videos La Maltière',
    'medias.videoclients.titre' => 'Videos customers',
    'medias.presse.titre' => 'Press',
    'liens.titre.siteclients' => 'Customers website',
    'liens.titre.siteprofessionnels' => 'Professionals website',
    'liens.titre.referenceprofessionnelle' => 'Professionals references',
  ),
  'menu' => 
  array (
    'menu.accueil' => 'Home',
    'menu.accueil.entreprise' => 'The company',
    'menu.accueil.soudure' => 'Welding realisations',
    'menu.barques' => 'Boats',
    'menu.remorques' => 'Trailers',
    'menu.options' => 'Options',
    'menu.medias' => 'Medias',
    'menu.medias.photosclients' => 'Pictures customers',
    'menu.medias.4000G' => 'Action 4000G',
    'menu.medias.videoslamaltiere' => 'La Maltiere videos',
    'menu.medias.videosclients' => 'Customers videos',
    'menu.medias.presse' => 'Press',
    'menu.liens' => 'Links',
    'menu.magasin' => 'Shop',
    'menu.contact' => 'Contact',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'The fields {{ fields }} were not expected.' => 'Les champs {{ fields }} n\'ont pas été prévus.',
    'The fields {{ fields }} are missing.' => 'Les champs {{ fields }} sont manquants.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les droits d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Droits invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Pas de privilèges pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Pas de session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur ne peut pas être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les droits ont expirés.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'accueil' => 
  array (
    'accueil.catalogue.chemin' => 'CATALOGUE',
    'accueil.catalogue.titre' => 'Catalogue',
    'accueil.retrouveznous' => 'Retrouvez-nous sur',
    'accueil.lien.facebook' => 'https://www.facebook.com/LaMaltiere',
    'accueil.lien.googeplus' => 'https://plus.google.com/u/0/102699585695842133884/posts',
    'accueil.lien.pinterest' => 'http://www.pinterest.com/lamaltiere/',
    'accueil.lien.instagram' => 'http://instagram.com/la_maltiere/',
    'accueil.lien.youtube' => 'http://www.youtube.com/user/TheMaltiere',
    'accueil.lien.flickr' => 'https://www.flickr.com/photos/lamaltiere/',
    'accueil.entreprise.titre' => 'Présentation de l\'entreprise',
    'accueil.entreprise.lienvideoyoutube' => '//www.youtube.com/embed/Ut3dfdRX-xI',
    'accueil.entreprise.texte.denomination' => 'LA MALTIERE',
    'accueil.entreprise.texte.phrase1' => 'est une fabrique artisanale française de barques de pêcheurs et de bateaux en aluminium soudés.',
    'accueil.entreprise.texte.phrase2' => 'Nos barques peuvent s\'adapter à la demande du client.',
    'accueil.entreprise.texte.phrase3' => 'Nos barques sont vendues en France, Belgique, Suisse, Cameroun, Nouvelle Calédonie, Vietnam, Niger, Maroc, Congo, Saint Barth (Antilles). Elles sont homologuées C.E et immatriculables en catégorie D.',
    'accueil.entreprise.texte.longeur' => 'Longueur : De 2.70 m à 5.00 m',
    'accueil.entreprise.texte.poids' => 'Poids : De 31 Kg à 85 Kg',
    'accueil.entreprise.texte.prix' => 'A partir de',
    'accueil.entreprise.image.fabrication' => 'Fabrication artisanale Française',
    'accueil.entreprise.image.transport' => 'Facile à transporter - Léger',
    'accueil.entreprise.image.modifiable' => 'Entièrement modifiable',
    'accueil.entreprise.image.stabilite' => 'Stabilité unique',
    'accueil.travauxsoudure.titre' => 'Travaux de soudure',
  ),
  'barqueRemorque' => 
  array (
    'barque.caracteristique.principal.titre' => 'Description détaillée d\'une barque aluminium',
    'barque.caracteristique.technique.titre' => 'Caractéristiques techniques',
    'barque.caracteristique.technique.contenu' => 'Coque à fond plat, découpe, assemblage, mise en forme, soudée en aluminium de haute résistance et joints silicones.
                        Tous nos bateaux sont fabriqués entièrement par nos soins.
                        Fond de 2 mm d\'épaisseur avec renforts de protection.
                        Cotés latéraux de 1,5 mm avec nervures.
                        Tableau arrière de 2 mm prévu pour renfort moteur. 
                        Caisson avec réserve de flottabilité.',
    'barque.caracteristique.stabilite.titre' => 'Tests de stabilité',
    'barque.caracteristique.equipement.titre' => 'Équipements',
    'barque.caracteristique.equipement.contenu' => 'Coffre arrière avec robuste fermeture à cadenasser. Assises recouvertes de contreplaqué marin. Poulies et taquets de descente de poids. Alvéoles pour accrochage (bourriche, seau à vifs, ...). Rames en bois avec tolets en laiton. Support de dame de nage en bronze. Charnières en aluminium.',
    'barque.caracteristique.remarques.titre' => 'Remarques',
    'barque.caracteristique.remarques.contenu' => 'Toutes nos barques sont fabriquées à la demande, en dehors de la forme générale, toutes modifications peuvent etre apportées à votre convenance. Les modifications vues sur ce site sont des demandes de clients. Charge donnée à titre indicatif pour un tirant d\'eau de 10 cm.',
    'remorque.pam.titre' => 'Les remorques - Pam Rocca Nautilus A.I.N',
    'remorque.pam.contenu' => 'Pour ajouter les options suivantes :',
    'remorque.pam.contenu.rouesecours' => 'Roue de secours',
    'remorque.pam.contenu.supportroue' => 'Support de roue',
    'remorque.pam.contenu.autres' => '- Clé antivol - etc... nous consulter.',
    'remorque.caracteristique.titre' => 'Description détaillée d\'une remorque',
    'slider.bouton.precedent' => 'Préc.',
    'slider.bouton.suivant' => 'Suiv.',
    'barque.label.capacite' => 'Capacité',
    'barque.label.moteur' => 'Moteur',
    'barque.label.longueur' => 'Longueur',
    'barque.label.largeur' => 'Largeur',
    'barque.label.hauteur' => 'Hauteur',
    'barque.label.poids' => 'Poids',
    'barque.label.charge' => 'Charge',
    'remorque.label.chargeutile' => 'Charge utile*',
    'remorque.label.ptc' => 'PTC',
    'remorque.label.longueurbateau' => 'Longueur bateau',
    'remorque.label.longueurremorque' => 'Longueur remorque*',
    'remorque.label.largeurremorque' => 'Largeur remorque*',
    'remorque.label.nbrouleaux' => 'Nombre rouleaux',
    'remorque.label.roues' => 'Roues',
    'remorque.message.caracteristique' => 'Ces caractéristiques varient en fonction de la version du bateau',
  ),
  'contact' => 
  array (
    'contact.titre' => 'Nous contacter',
    'contact.telecharger.catalogue' => 'Télécharger notre catalogue et bon de commande',
    'contact.catalogue.titre' => 'Catalogue',
    'contact.boncommande.titre' => 'Bon de commande',
    'contact.boncommande.phrase1' => 'Remplir le bon de commande et renvoyez le à SAS LA MALTIERE.',
    'contact.boncommande.phrase2' => 'Pour toute information tarifaire et/ou complémentaire sur nos produits, n\'hésitez pas à nous contacter.',
  ),
  'magasin' => 
  array (
    'magasin.moteur.titre' => 'Revente de moteurs et d\'écho sondeurs, nous consulter',
    'magasin.panier.titre' => 'Mon panier',
    'magasin.panier.vide' => 'Votre panier est vide.',
    'magasin.panier.commandevalidee' => 'Votre commande a bien été envoyé à la société La Maltière.',
    'magasin.panier.emailenvoye' => 'Un email récapitulatif de votre commande a été envoyé sur l\'adresse mail :',
    'magasin.panier.recapitulatif' => 'Récapitulatif des articles',
    'magasin.panier.produit' => 'Produit',
    'magasin.panier.quantite' => 'Quantité',
    'magasin.panier.prixunitaire' => 'P.U',
    'magasin.panier.total' => 'Total',
    'magasin.panier.msgtotal' => 'Total de votre commande',
    'magasin.panier.fraisport' => 'Frais de port inclus',
    'magasin.retour.magasin' => 'Retour au magasin',
    'magasin.bouton.commander' => 'Commander',
    'detailmagasin.bouton.ajouterpanier' => 'Ajouter au panier',
    'detailmagasin.message.indisponible' => 'Pour commander ce produit, veuillez nous contacter.',
    'detailmagasin.message.quantite' => 'Quantité',
    'confirmation.commande.titre' => 'Finalisation de ma commande',
    'confirmation.commande.civilite' => 'Civilité',
    'confirmation.commande.civilite.monsieur' => 'Monsieur',
    'confirmation.commande.civilite.madame' => 'Madame',
    'confirmation.commande.nom' => 'Nom',
    'confirmation.commande.prenom' => 'Prénom',
    'confirmation.commande.adresse' => 'Adresse',
    'confirmation.commande.codepostal' => 'Code postal',
    'confirmation.commande.ville' => 'Ville',
    'confirmation.commande.pays' => 'Pays',
    'confirmation.commande.telephone' => 'Téléphone',
    'confirmation.commande.email' => 'Adresse email',
    'confirmation.commande.bouton.valider' => 'Valider la commande',
  ),
  'medias' => 
  array (
    'medias.photosclients.titre' => 'Espace photos clients',
    'medias.4000G.titre' => 'Photos 4000G en action',
    'medias.videolamaltiere.titre' => 'Vidéos La Maltière',
    'medias.videoclients.titre' => 'Vidéos clients',
    'medias.presse.titre' => 'Presse',
    'liens.titre.siteclients' => 'Sites de clients',
    'liens.titre.siteprofessionnels' => 'Sites de professionnels',
    'liens.titre.referenceprofessionnelle' => 'Références professionnelles',
  ),
  'menu' => 
  array (
    'menu.accueil' => 'Accueil',
    'menu.accueil.entreprise' => 'L\'entreprise',
    'menu.accueil.soudure' => 'Travaux de soudure',
    'menu.barques' => 'Barques',
    'menu.remorques' => 'Remorques',
    'menu.options' => 'Options',
    'menu.medias' => 'Médias',
    'menu.medias.photosclients' => 'Photos clients',
    'menu.medias.4000G' => '4000G en action',
    'menu.medias.videoslamaltiere' => 'Vidéos La Maltiere',
    'menu.medias.videosclients' => 'Vidéos clients',
    'menu.medias.presse' => 'Presse',
    'menu.liens' => 'Liens',
    'menu.magasin' => 'Magasin',
    'menu.contact' => 'Contact',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);


return $catalogue;
