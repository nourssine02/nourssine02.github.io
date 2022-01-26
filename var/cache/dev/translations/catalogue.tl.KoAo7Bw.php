<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('tl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ang halaga nito ay dapat na huwad.',
    'This value should be true.' => 'Ang halaga nito ay dapat totoo.',
    'This value should be of type {{ type }}.' => 'Ang halaga nito ay dapat sa uri {{ type }}.',
    'This value should be blank.' => 'Ang halaga nito ay dapat walang laman.',
    'The value you selected is not a valid choice.' => 'Ang halaga ng iyong pinili ay hindi balidong pagpili.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamababang {{ limit }} ng pagpilian.|Kailangan mong pumili ng pinakamababang {{ limit }} ng mga pagpipilian.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Kailangan mong pumili ng pinakamataas {{ limit }} ng pagpipilian.|Kailangan mong pumili ng pinakamataas {{ limit }} ng mga pagpipilian.',
    'One or more of the given values is invalid.' => 'Isa o higit pang mga halaga na binigay ay hindi balido.',
    'This field was not expected.' => 'Ang larangang ito ay hindi inaasahan.',
    'This field is missing.' => 'Ang patlang na ito ay nawawala.',
    'This value is not a valid date.' => 'Ang halagang ito ay hindi balidong petsa.',
    'This value is not a valid datetime.' => 'Ang halagang ito ay hindi wastong petsa/oras.',
    'This value is not a valid email address.' => 'Ang halagang ito ay hindi balidong address ng email.',
    'The file could not be found.' => 'Ang file na ito ay hindi makita.',
    'The file is not readable.' => 'Ang file na ito ay hindi mabasa.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file na ito ay masyadong malaki ({{ size }} {{ suffix }}). Ang pinakamalaking sukat {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ang uri ng file ng mime ay hindi balido ({{ type }}). Ang mga pinapayagang uri ng mime ay ang  {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ang halaga nito ay dapat na {{ limit }} or maliit pa.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ang halaga nito ay masyadong mahaba. Ito ay dapat na {{ limit }} karakter o maliit pa.|Ang halaga nito ay masyadong mahaba. Ito ay dapat na {{ limit }} mga karakter o maliit pa.',
    'This value should be {{ limit }} or more.' => 'Ang halaga nito ay dapat na {{ limit }} o mas marami pa.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} karakter o marami pa.|Ang halaga nito ay masyadong maliit. Ito ay dapat na {{ limit }} mga karakter o marami pa.',
    'This value should not be blank.' => 'Ang halaga na ito ay dapat na may laman.',
    'This value should not be null.' => 'Meron dapt itong halaga.',
    'This value should be null.' => 'Wala dapat itong halaga.',
    'This value is not valid.' => 'Hindi balido ang halagang ito.',
    'This value is not a valid time.' => 'Ang halagang ito ay hindi wastong oras.',
    'This value is not a valid URL.' => 'Hindi ito isang balidong URL.',
    'The two values should be equal.' => 'Ang dalwang halaga ay dapat magkapareha.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ang file ay masyadong malaki. Ang pinapayagan halaga lamang ay {{ limit}} {{ suffix }}.',
    'The file is too large.' => 'Ang file na ito ay masyadong malaki.',
    'The file could not be uploaded.' => 'Ang file na ito ay hindi ma-upload.',
    'This value should be a valid number.' => 'Ang halaga nito ay dapat na wastong numero.',
    'This file is not a valid image.' => 'Ang file na ito ay hindi wastong imahe.',
    'This is not a valid IP address.' => 'Ito ay hindi wastong IP address.',
    'This value is not a valid language.' => 'Ang halaga na ito ay hindi balidong wika.',
    'This value is not a valid locale.' => 'Ito ay isang hindi wastong locale na halaga.',
    'This value is not a valid country.' => 'ng halaga na ito ay hindi wastong bansa.',
    'This value is already used.' => 'Ang halaga na ito ay ginamit na.',
    'The size of the image could not be detected.' => 'Ang sukat ng imahe ay hindi madetect.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ang lapad ng imahe ay masyadong malaki ({{ width }}px). Ang pinapayagang lapay ay {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ang lapad ng imahe ay masyadong maliit ({{ width }}px). Ang pinakamaliit na pinapayagang lapad ay {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Ang haba ng imahe ay masyadong mataas ({{ height }}px). Ang pinakmataas na haba ay {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Ang haba ng imahe ay masyadong maliit ({{ height }}px). Ang inaasahang haba ay {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ang halagang ito ay dapat na password ng kasalukuyang gumagamit.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ang halagang ito ay dapat na eksakto sa {{ limit}} karakter.|Ang halagang ito ay dapat na eksakto sa {{ limit }} mga karakter.',
    'The file was only partially uploaded.' => 'Ang file na ito ay kahalating na upload lamang.',
    'No file was uploaded.' => 'Walang na upload na file.',
    'No temporary folder was configured in php.ini.' => 'Walang temporaryong folder ang naayos sa php.ini.',
    'Cannot write temporary file to disk.' => 'Temporaryong hindi  makasulat ng file sa disk.',
    'A PHP extension caused the upload to fail.' => 'Ang dahilan ng pagkabigo ng pagupload ng files ay isang extension ng PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o marami pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o marami pa.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} elemento o maliit pa.|Ang koleksyon na ito ay dapat magkaroon ng {{ limit }} mga elemento o maliit pa.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} elemento.|Ang koleksyong ito ay magkaroon ng eksaktong {{ limit }} mga elemento.',
    'Invalid card number.' => 'Hindi wastong numero ng kard.',
    'Unsupported card type or invalid card number.' => 'Hindi supportadong uri ng kard o hindi wastong numero ng kard.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ito ay hindi isang balidong International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ang halagang ito ay hindi balidong SBN-10.',
    'This value is not a valid ISBN-13.' => 'Ang halagang ito ay hindi balidong ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ang halagang ito ay pwdeng isang balidong ISBN-10 o isang balidong ISBN-13.',
    'This value is not a valid ISSN.' => 'Ang halangang ito ay hindi isang balidong ISSN.',
    'This value is not a valid currency.' => 'Ang halagang ito ay hindi balidong pera.',
    'This value should be equal to {{ compared_value }}.' => 'Ito ay hindi dapat magkapareho sa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ang halagang ito ay dapat tataas sa {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas mataas o magkapareha sa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay dapat kapareha ng {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ang halagang ito ay dapat mas maliit sa {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ang halagang ito ay dapat mas maliit o magkapareha sa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ang halagang ito ay hindi dapat magkapareha sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Ang ratio ng imahe ay masyadong malaki ({{ ratio }}). Ang pinakamalaking ratio ay {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Ang ratio ng imahe ay masyadong maliit ({{ ratio }}). Ang pinakamaliit na ratio ay {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Ang imahe ay kwadrado ({{ width }}x{{ height }}px). Ang mga kwadradong imahe ay hindi pwede.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakalandscape ({{ width }}x{{ height }}px). Ang mga imaheng nakalandscape ang orientasyon ay hindi pwede.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Ang orientasyon ng imahe ay nakaportrait ({{ width }}x{{ height }}px). Ang mga imaheng nakaportrait ang orientasyon ay hindi pwede.',
    'An empty file is not allowed.' => 'Ang file na walang laman ay hindi pwede.',
    'The host could not be resolved.' => 'Hindi maresolba ang host.',
    'This value does not match the expected {{ charset }} charset.' => 'Ang halaga ay hindi kapareha sa inaasahang {{ charset }} set ng karater.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ito ay hindi isang balidong Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Ito ay hindi wastong UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ang halagang ito ay dapat multiple ng {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ang Business Identifier Code (BIC) na ito ay walang kaugnayan sa IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Ang halagang ito ay dapat naka wastong JSON.',
    'This collection should contain only unique elements.' => 'Ang mga elemento ng koleksyong ito ay dapat magkakaiba.',
    'This value should be positive.' => 'Ang halagang ito ay dapat positibo.',
    'This value should be either positive or zero.' => 'Ang halagang ito ay dapat positibo o zero.',
    'This value should be negative.' => 'Ang halagang ito ay dapat negatibo.',
    'This value should be either negative or zero.' => 'Ang halagang ito ay dapat negatibo o zero.',
    'This value is not a valid timezone.' => 'Ang halagang ito ay hindi wastong timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Naikalat ang password na ito sa isang data breach at hindi na dapat gamitin. Mangyaring gumamit ng ibang pang password.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ang halagang ito ay dapat nasa pagitan ng {{ min }} at {{ max }}.',
    'This value is not a valid hostname.' => 'Ang halagang ito ay hindi wastong hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Ang bilang ng mga elemento sa koleksyon na ito ay dapat multiple ng {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Ang halagang ito ay dapat masunod ang kahit na isang sumusunod na batayan.',
    'Each element of this collection should satisfy its own set of constraints.' => 'Ang bawat elemento sa koleksyon na ito ay dapat masunod ang nararapat na batayan.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Ang halagang ito ay hindi wastong International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'Ang halagang ito ay dapat wastong ekspresyon.',
    'This value is not a valid CSS color.' => 'Ang halagang ito ay hindi wastong kulay ng CSS.',
    'This form should not contain extra fields.' => 'Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.',
    'This value is not a valid HTML5 color.' => 'Ang halagang ito ay hindi wastong HTML5 color.',
    'Please enter a valid birthdate.' => 'Pakilagay ang tamang petsa ng kapanganakan.',
    'The selected choice is invalid.' => 'Ang pinagpiliang sagot ay hindi tama.',
    'The collection is invalid.' => 'Hindi balido ang koleksyon.',
    'Please select a valid color.' => 'Pakipiliin ang nararapat na kulay.',
    'Please select a valid country.' => 'Pakipiliin ang nararapat na bansa.',
    'Please select a valid currency.' => 'Pakipiliin ang tamang pananalapi.',
    'Please choose a valid date interval.' => 'Piliin ang wastong agwat ng petsa.',
    'Please enter a valid date and time.' => 'Piliin ang wastong petsa at oras.',
    'Please enter a valid date.' => 'Ilagay ang wastong petsa.',
    'Please select a valid file.' => 'Piliin ang balidong file.',
    'The hidden field is invalid.' => 'Hindi balido ang field na nakatago.',
    'Please enter an integer.' => 'Pakilagay ang integer.',
    'Please select a valid language.' => 'Piliin ang nararapat na lengguwahe.',
    'Please select a valid locale.' => 'Pakipili ang nararapat na locale.',
    'Please enter a valid money amount.' => 'Pakilagay ang tamang halaga ng pera.',
    'Please enter a number.' => 'Ilagay ang numero.',
    'The password is invalid.' => 'Hindi balido ang password.',
    'Please enter a percentage value.' => 'Pakilagay ang tamang porsyento ng halaga.',
    'The values do not match.' => 'Hindi tugma ang mga halaga.',
    'Please enter a valid time.' => 'Pakilagay ang tamang oras.',
    'Please select a valid timezone.' => 'Pakilagay ang tamang sona ng oras.',
    'Please enter a valid URL.' => 'Pakilagay ang balidong URL.',
    'Please enter a valid search term.' => 'Pakilagay ang balidong katagang sinasaliksik.',
    'Please provide a valid phone number.' => 'Pakilagay ang balidong numero ng telepono.',
    'The checkbox has an invalid value.' => 'Ang checkbox ay mayroon hindi balidong halaga.',
    'Please enter a valid email address.' => 'Pakilagay ang balidong email address.',
    'Please select a valid option.' => 'Pakipiliin ang balidong pagpipilian.',
    'Please select a valid range.' => 'Pakipilian ang balidong layo.',
    'Please enter a valid week.' => 'Pakilagay ang balidong linggo.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Nagkaroon ng isang pagbubukod sa pagpapatotoo.',
    'Authentication credentials could not be found.' => 'Hindi matagpuan ang mga kredensyal ng pagpapatotoo.',
    'Authentication request could not be processed due to a system problem.' => 'Ang kahilingan sa pagpapatotoo ay hindi naproseso dahil sa isang problema sa system.',
    'Invalid credentials.' => 'Di-wastong mga kredensyal.',
    'Cookie has already been used by someone else.' => 'Ang Cookie ay ginamit na ng ibang tao.',
    'Not privileged to request the resource.' => 'Walang pribilehiyo upang humingi ng mga bagong mapagkukunan.',
    'Invalid CSRF token.' => 'Di-wastong token ng CSRF.',
    'No authentication provider found to support the authentication token.' => 'Walang nahanap na provider ng pagpapatotoo upang suportahan ang token ng pagpapatotoo.',
    'No session available, it either timed out or cookies are not enabled.' => 'Walang magagamit na session, alinman sa nag-time out o ang cookies ay hindi pinagana.',
    'No token could be found.' => 'Walang makitang token.',
    'Username could not be found.' => 'Hindi makita ang username.',
    'Account has expired.' => 'Nag-expire na ang account.',
    'Credentials have expired.' => 'Nag-expire na ang mga kredensyal.',
    'Account is disabled.' => 'Ang account ay hindi pinagana.',
    'Account is locked.' => 'Ang account ay naka-lock.',
    'Too many failed login attempts, please try again later.' => 'Napakaraming nabigong mga pagtatangka sa pag-login, mangyaring subukang muli sa ibang pagkakataon.',
    'Invalid or expired login link.' => 'Inbalido o nagexpire na ang link para makapaglogin.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Napakaraming nabigong mga pagtatangka sa pag-login, pakisubukan ulit sa% minuto% minuto.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
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
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
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
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
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
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
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
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Edit %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'login_page.forgot_password' => 'Forgot Your Password?',
    'login_page.remember_me' => 'Remember me',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
    'autocomplete.no-results-found' => 'No results found',
    'autocomplete.no-more-results' => 'No more results',
    'autocomplete.loading-more-results' => 'Loading more results…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
