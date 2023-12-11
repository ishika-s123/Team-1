const servingsInput = document.getElementById('servings');
const ingredientsInput = document.getElementById('ingredients');
const updateRecipeButton = document.getElementById('update-recipe');

updateRecipeButton.addEventListener('click', () => {
  const servings = servingsInput.value;
  const ingredients = ingredientsInput.value;
  // Calculate the new proportions
  const newProportions = {
    servings: servings / 10,
    ingredients: ingredients / 10,
  };
  // Update the recipe
  // ...
  console.log(newProportions);
});
