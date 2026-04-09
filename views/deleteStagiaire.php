<?php
$title = "Supprime stagiaire";

ob_start();
?>

<button onclick="document.getElementById('monModal').showModal()" class="mt-6 hover:bg-red-400 text-lg bg-red-500 text-white px-6 py-3 rounded">
    Supprimer
</button>

<!-- Le Modal -->
<dialog id="monModal" class="rounded-lg p-6 backdrop:bg-gray-900/50">
    <div class="text-center">
        <h3 class="font-bold text-lg">Confirmer la suppression</h3>
        <p class="py-4">Êtes-vous sûr de vouloir supprimer ce stagiaire ?</p>

        <div class="flex justify-end gap-2">
            <a href="index.php?action=show" onclick="document.getElementById('monModal').close()" class="cursor-pointer bg-gray-300 text-white px-4 py-2 rounded btn">Annuler</a>
            <a href="index.php?action=destroy&id=<?php echo $userId ?>" id="confirmDelete" class="cursor-pointer bg-red-500 text-white px-4 py-2 rounded">Supprimer</a>

        </div>
    </div>
</dialog>


<?php
$content = ob_get_clean();
?>
<?php
include_once 'layout.php';
?>

