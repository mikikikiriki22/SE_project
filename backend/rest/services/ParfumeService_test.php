<?php

require_once 'ParfumeService.php';

$parfumeService = new ParfumeService();

/*echo "Adding a new fragrance:\n";

$newFragrance = [
    'name' => 'Carlisle',
    'brand_id' => 11,
    'description' => 'Parfums de Marly Carlisle is a fragrance of contrasts — a spicy, woody scent balanced with warm, sweet notes. It opens with bright green apple and nutmeg, unfolding into a luxurious heart of rose and tonka bean. The rich base of vanilla, patchouli, and opoponax creates a powerful yet refined finish, embodying timeless elegance and strength.',
    'seasons' => 'Autumn, Winter',
    'notes_id' => '2' // (adjust notes later)
];
$addedFragrance = $parfumeService->addFragrance($newFragrance);
print_r($addedFragrance); */


/*echo "Deleting the fragrance:\n";

$fragranceIdToDelete = 1;
$parfumeService->deleteFragrance($fragranceIdToDelete);
echo "Fragrance deleted succesfully.";*/


/*echo "Updating an existing fragrance:\n";

$fragranceId = 2;  // Example ID of the fragrance to be updated

$updatedFragrance = [
    'name' => 'Naxos',
    'brand_id' => 4,
    'description' => 'Updated description for Naxos...',
    'seasons' => 'Winter, Autumn'
];

$parfumeService->update($fragranceId, $updatedFragrance);  // Update fragrance details
echo "Fragrance updated successfully.\n"; */


/*echo "Fetching a fragrance by ID:\n";

$fragranceId = 1;

$fragrance = $parfumeService->getById($fragranceId);

if ($fragrance) {
    print_r($fragrance);
} else {
    echo "Fragrance not found.\n";
}*/


echo "Fetching all fragrances:\n";

$fragrances = $parfumeService->getAll();

print_r($fragrances);
