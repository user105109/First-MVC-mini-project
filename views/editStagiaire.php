<?php
$title = "Edit stagiaire";

ob_start();
?>

<form action="index.php?action=edit&id=<?php echo $userId ?>" method="post" class="mt-5 mx-auto space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    <div>
        <label class="block text-sm font-medium text-gray-900" for="nom">Nom</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" name="nom" id="nom" type="text" placeholder="Votre nouveau nom">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="prenom">Prenom</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="prenom" name="prenom" type="text" placeholder="Votre nouveau prenom">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="age">Age</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="age" name="age" type="number" placeholder="Votre nouveau age">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="login">Login</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="login" name="login" type="text" placeholder="Votre nouveau login">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="password">Password</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="password" name="password" type="password" placeholder="Votre nouveau password*">
    </div>



    <button class="block max-w-sm rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600" type="submit">
        Modify
    </button>
</form>
<?php
$content = ob_get_clean();
?>
<?php
include_once 'layout.php';
?>
