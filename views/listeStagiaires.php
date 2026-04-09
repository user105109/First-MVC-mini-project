
<?php
$title = "Liste des stagiaires";

ob_start();
?>
<a href="index.php?action=create" class="inline-block my-5 rounded-sm border border-indigo-600 bg-white px-10 py-4 text-md font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white" href="#">
    Ajoute stagiaire
</a>
<table class="min-w-full">
        <thead>
        <tr>
            <th class="text-center px-6 py-3 border-b">ID</th>
            <th class="text-center px-6 py-3 border-b">Prenom</th>
            <th class="text-center px-6 py-3 border-b">Nom</th>
            <th class="text-center px-6 py-3 border-b">Age</th>
            <th class="text-center px-6 py-3 border-b">Login</th>
            <th class="text-center px-6 py-3 border-b">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($stagiaires as $stagiaire):?>
            <tr class="odd:bg-white even:bg-gray-50">
                <td class="text-center px-6 py-4 border-b"><?php echo $stagiaire["id"] ?></td>
                <td class="text-center px-6 py-4 border-b"><?php echo $stagiaire["prenom"] ?></td>
                <td class="text-center px-6 py-4 border-b"><?php echo $stagiaire["nom"] ?></td>
                <td class="text-center px-6 py-4 border-b"><?php echo $stagiaire["age"] ?></td>
                <td class="text-center px-6 py-4 border-b"><?php echo $stagiaire["login"] ?></td>
                <td class="text-center px-6 py-4 border-b">
                    <a href="index.php?action=newInfo&id=<?php echo $stagiaire['id'] ?>" class="inline-block rounded-sm border border-green-600 bg-green-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-green-600" href="#">
                        Modify
                    </a>
                    <a href="index.php?action=delete&id=<?php echo $stagiaire['id'] ?>" class="inline-block rounded-sm border border-red-600 bg-red-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-red-600" href="#">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
<?php
$content = ob_get_clean();
?>
<?php
include_once 'views/layout.php';
?>
