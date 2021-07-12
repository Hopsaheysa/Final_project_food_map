<?php

namespace Database\Seeders;

class DataProvider
{

    public static function getRecipes()
    {

        return [
            [
                'name' => "Kuba",
                'instructions' => "Soak dried mushrooms in water for at least 2 hours, then squeeze them to get rid of extra water. 
            Rinse hulled grain in cold water and cook in salted water until soft, about 20‑30 minutes. Drain and let in the sieve to get rid of water.
            Cut onion in small pieces and fry on lard until brownish, add soaked mushrooms cut in bigger pieces. Stir shortly, then add garlic crushed with salt, caraway, marjoram and freshly ground pepper.
            Butter the casserole, put in hulled grain and mushroom mixture and mix together. Smooth out and bake in preheated oven at 180°C for about 25 minutes until golden-brown colour.",
                'image' => "Kuba.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[3, "piece", "mushrooms"], [300, "g", "hulled grain (barley)"], [4, "tablespoon", "lard"], [2, "whole", "onions"], [2, "cloves", "garlic"], [0.5, "teaspoon", "ground caraway"], [1, "teaspoon", "dried marjoram"], [null, null, "salt"], [null, null, "pepper"]]
            ], [
                'name' => "Fried carp with potato salad",
                'instructions' => "Preferably the day before, boil potatoes in skin for about 15‑20 minutes, depending on their size, check with a knife whether they are soft. Let them cool down, peel and cut into cubes about 1 × 1 cm.
            Peel carrot and celery root and cook them in salted water 10‑15 minutes until tender but not overcooked. Take them out of water, let cool down and cut in small pieces. Prepare hard-boiled eggs, peel and cut in pieces. Defrost green peas (or rinse the sterilized one and drain). 
            Cut ham and pickles in small cubes (leaving the brine for seasoning). Mix all ingredients carefully in a bowl, add mayonnaise and some pickle brine with mixed salt and pepper.
            Salt the carp fillets and dip them in flour, then in egg and milk mixture and finally in breadcrumbs. Fry on all sides in hot oil until golden brown. Add lemon for each serving.",
                'image' => "fried-carp.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[4, "piece", "carp fillets"], [150, "g", "flour"], [6, null, "eggs"], [2, "tablespoon", "milk"], [null, null, "bread crumbs"], [null, null, "fat for frying"], [null, null, "lemon"], [null, null, "salt"], [1, "kg", "potatoes"], [4, null, "carrots"], [250, "g", "celery root"], [1, "jar", "sterilized greem peas"], [200, "g", "ham"], [150, "g", "pickles"], [150, "g", "mayonnaise"], [null, null, "pepper"]]
            ], [
                'name' => "Easter stuffing",
                'instructions' => "Cook the smoked meat in water and let it cool down. Then cut it in cubes.
            Dice the rolls or baguette and put them in a larger bowl. Whisk egg yolks in the milk, season with salt and pepper and add a bit of nutmeg. Pour over the dices of rolls (or baguette) and let soak. Add pieces of meat. Chop the herbs, add in the bowl and mix together. Finally, add egg whites foam. 
            Lard the casserole, sprinkle with bread crumbs and pour in the mixture. Bake in preheated oven at 200°C for about 35‑40 minutes until golden brown.",
                'image' => "easter-stuffing.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[800, "g", "smoked meat"], [1, null, "baguette"], [8, null, "eggs"], [250, "ml", "milk"], [null, null, "salt"], [null, null, "pepper"], [null, null, "nutmeg"], [null, null, "herbs"], [null, null, "lard"], [null, null, "bread crumbs"]]
            ], [
                'name' => "Buchty",
                'instructions' => "Mix the yeast with a bit of sugar and lukewarm milk and put the mixture on a warm place to let the yeast ferment. Melt the butter in the rest of the lukewarm milk.
            Put the flour with a pinch of salt into a bowl, add the remaining sugar, egg yolks, some vanilla grains or a bit of vanilla sugar and some grated lemon zest. Pour in the warm milk with melted butter and the fermented yeast mixture. Knead until having smooth dough, sprinkle with some flour and let rise until doubled in bulk.
            In the meantime, prepare the filling. To make quark filling, beat the quark with sugar and egg yolks until smooth. Soak raisins in rum, sieve and blend in the mixture. To make plum-jam filling, mix the jam with a bit of rum. Making poppy seed filling is the trickiest. Mix ground poppy seed with milk and sugar, cinnamon and vanilla, cook the mixture over low heat and finally add raisins, bit of rum and cocoa for better taste. Let it cool. 
            When the dough is ready, put it on floured pastry board. You can either roll the dough to a thicker layer and divide it to get equal square pieces, or, using a tablespoon, pinch off balls directly from the dough to make flat square pieces. Place a tablespoon of filling onto the centre of each square piece, bend the edges over the filling, press together using your fingers and make a roll. Grease the bun with melted butter and place it into a baking pan, one next to another. Finally, brush some more melted butter over the top of all of them. Bake in a preheated oven at 180°C for about 25-30 minutes, until they take golden-brown colour. Sprinkle with powdered sugar before serving. ",
                'image' => "buchty.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Czech Republic", "Slovakia"],
                'ingredients' => [[1, "package", "fresh yeast"], [250, "g", "milk"], [140, "g", "butter"], [500, "g", "flour"], [null, null, "salt"], [60, "g", "sugar"], [3, null, "egg yolks"], [null, null, "vanilla"], [null, null, "grated lemon zest"], [null, null, "melted butter"], [250, "g", "soft quark"], [100, "g", "powdered sugar"], [2, null, "egg yolks"], [1, "tablespoon", "rasins soaked in rum"]]
            ], [
                'name' => "Svíčková (Beef sirloin with cream sauce)",
                'instructions' => "Clean the meat, get it rid of membranes and lard with bacon. Then sprinkle with salt and pepper. Clean the onion and cut it in small cubes, clean the vegetables and grate it. Put the vegetables in the casserole, place the meat on top, add spices, sprinkle with lemon juice and pour over the melted butter. Cover with a lid and let sit in the fridge overnight.
            The next day baste the meat with some water and stew in the oven, covered with a lid. When tender, take the meat out and let sit. Remove the spices from the sauce, especially bay leaves. 
            Bring the sauce slowly to boil. Add mustard, two tablespoons of flour and stir fry. Pour in the cream and boil gently, mixing from time to time. If the sauce is too thick, dilute it with some milk. Finally sieve through and press softened vegetables in the sauce through a sieve. Season with salt, add some lemon juice or some sugar. To highlight its taste, you can add some caramelized sugar (caramelize one tablespoon of sugar, when it starts melting and turns brown, baste with some water and cook).
            Divide the meat into portions, put it back in the sauce and heat up. Serve with bread dumpling, slice of lemon and cranberry sauce.",
                'image' => "svickova.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Czech Republic"],
                'ingredients' => [[750, "g", "beef sirloin"], [50, "g", "bacon"], [140, "gram", "butter"], [2, "bigger", "carrots"], [150, "g", "celery root"], [null, null, "salt"], [null, null, "pepper"], [1, null, "parsley"], [1, null, "onion"], [5, null, "peppercorns"], [3, null, "allspice balls"], [3, null, "bayleaves"], [1, "pinch", "thyme"], [150, "g", "melted butter"], [1, null, "lemon"], [100, "g", "mustard"], [2, "tablespoons", "flour"], [250, "ml", "whipping cream"], [null, null, "sugar"]]
            ], [
                'name' => "Kyselo (sour and mushroom soup)",
                'instructions' => "Dilute the sourdough with a bit of lukewarm water and let rise for several hours, preferably overnight. Put mushroom and caraway in the pot, add peeled, washed potatoes cut in cubes. Pour in the water, salt and cook until tender. Then add the fermented sourdough mixture and cook. Cut the onion in small pieces and fry on butter or lard, adding it in the soup. Prepare scrambled eggs (the mixture should not be too thick), serving them either directly on the plates or putting them in the soup.",
                'image' => "kyselo.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Czech Republic",],
                'ingredients' => [[120, "g", "sourdough"], [40, "g", "butter"], [70, "g", "mushrooms"], [300, "g", "potatoes"], [1, null, "onion"], [900, "ml", "water"], [200, "ml", "milk"], [2, null, "eggs"], [null, null, "salt"], [null, null, "caraway"]]
            ], [
                'name' => "Tortilla de patatas",
                'instructions' => "For this recipe, I used a 9 inch pan. It's a good size for a nice and thick omelette. And I used a bigger pan to cook the potatoes.
            Peel and slice the potatoes very thin
            Chop the onion, season with salt (and pepper if you want), and cook in a small pan on a low-medium heat until it gets brown, then set it aside.
            While the onion is cooking, preheat a pan with 2 cups of vegetable or canola oil on high heat. Place the potato slices into the pan.
            Season the potatoes with salt and pepper and cook for about 5 to 7 minutes. Do not wait until they look brown, we don’t want french fries! To be sure the potatoes are done, poke them with a wooden spoon and if they fall apart, they are done.
            Once the potatoes are cooked, drain the oil. Mix the potatoes with the onion in the pan and combine them well ( you can skip this step but I love the flavor it gets). Then place the mixture into a bowl.
            Beat 4 eggs, season them with some more salt and pepper, and pour them into the bowl with the onion and potatoes. Mix with a spatula or a wooden spoon.
            Be sure it is juicy! If it looks dry just beat another egg and pour it into the mixture.
            Using one of the pans you used for the potato or onion, pour about 1 tablespoon of olive oil and place on medium-low heat. Once the oil is warm, pour the mixture in. After about a minute, peel back the edges of the omelette from the pan so it doesn’t stick. Shaking the pan also helps to ensure the omelette doesn’t stick.
            In about 4-5 minutes, the bottom of the omelette should be cooked. Position a plate on top of the omelette in the pan, and flip it. The omelette now will be on the plate. Next, slide it back into the pan, with the cooked face of the omelette facing up.
            Cook it for about 3-5 minutes and flip again. Now the omelette should have a consistent texture. Slide it back into the pan for another 30 seconds and flip it again. I always flip the omelette 5-6 times. My grandmother told me that the more you flip it, the better!",
                'image' => "tortilla-de-patatas.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[3, null, "potatoes"], [1, null, "onion"], [4, null, "eggs"], [500, "ml", "oil"], [null, null, "salt"], [null, null, "black pepper"]]
            ], [
                'name' => "Authentic Paella Valenciana",
                'instructions' => "Heat a paella pan over medium-high heat, and coat with olive oil. Add the chicken, rabbit and garlic; cook and stir until nicely browned. Move the browned meat to the sides of the pan, and add the tomato, butter beans, peas, and green beans. Season with paprika, and mix well.
            Fill the paella pan almost to the top with water, measuring the water as you put it in. This is to help you to determine how much rice to add, as paella pans come in different sizes. Bring to a boil. Simmer for about 1 hour to make a nice broth.
            Season with a generous amount of salt, and just enough saffron to make a nice yellow color. Season with thyme and rosemary if desired. The goal is to make a rich tasting broth that will soak into the rice to make it delicious. Stir in half as much rice as the amount of water in the pan. Cover, reduce heat to low, and simmer until all of the liquid has been absorbed, about 20 minutes.",
                'image' => "paella-valenciana.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[1, "tablespoon", "olive oil"], [0.5, null, "chicken"], [0.5, null, "rabbit"], [10, "cloves", "garlic"], [1, null, "tomato"], [1, null, "tomato"], [1, "can", "butter beans"], [300, "g", "frozen green peas"], [300, "g", "frozen green beans"], [null, null, "salt"], [null, null, "mild paprika"], [1, "pinch", "saffron threads"], [1, "pinch", "dried thyme"], [1, "pinch", "dried rosemary"], [4, "cups", "white rice"]]
            ], [
                'name' => "Gazpacho",
                'instructions' => "Place the cucumber, peppers, tomatoes, garlic and spring onions in a large bowl. Add the bread and season well with salt and pepper. Add the sherry vinegar and a couple of tablespoons of olive oil and mix together with your hands, pressing down to squeeze out the juices. Cover and chill. Leave to marinade for at least 30 mins or overnight.
            Put the vegetable mixture into a blender and whiz until smooth. Check the consistency. If it is still rather thick and not very rich, add another glug or two of olive oil until you reach a consistency you like. Taste and adjust the seasoning as necessary. You might need a little more vinegar. Cover and chill again, until really cold and you’re ready to serve.
            To serve, stir the gazpacho and taste again as the seasoning may have changed as the soup is now very cold. Adjust as necessary, then serve ice cold with gazpacho ice cubes, sprinkled with chopped basil, an extra drizzle of olive oil and the toasts alongside, if using.",
                'image' => "gazpacho.jpg",
                'isVegan' => true,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Spain"],
                'ingredients' => [[1, null, "cucumber"], [1, null, "red pepper"], [1, null, "green pepper"], [1, "kg", "plum tomatoes"], [2, "cloves", "garlic"], [2, null, "spring onions"], [2, "tablespoons", "sherry vinegar"]]
            ], [
                'name' => "Boeuf Bourguignon",
                'instructions' => "Pre-heat oven to 180°C (350°F)
            Start with the vegetables: chop the carrots in 1 cm pieces and the onion finely
            Dry the beef cubes with paper towel and sprinkle with salt and pepper
            In a pan, heat some oil and add the beef pieces. Braise meat for 5 minutes and add the chopped vegetables
            Stir for a few minutes, while you prepare the “bouquet garni” by arranging the herbs in a neat stack, one on top of the other, and then tie the ingredients into a tight bundle with string.
            Add the flour and continue to stir
            Transfer to a Dutch oven (casserole dish)
            Add the wine, the beef stock.the finely chopped garlic and the “bouquet garni”
            Cook in the oven for around 2 hours
            In the meantime, cook the pearl onions (until golden but still firm) and mushrooms separately
            Add the pearl onions and mushrooms to the beef stew once it is cooked. Remove the 'bouquet garni'
            Best served with egg pasta (tagliatelle), mashed or boiled potatoes",
                'image' => "gazpacho.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[1, "kg", " beef"], [1, null, "carrots"], [1, null, "onion"], [30, "g", "flour"], [2, "cloves", "garlic"], [40, "cl", "red wine"], [40, "cl", "beef stock"], [null, null, "vegetable oil"], [null, null, "black pepper"], [150, "g", "mushrooms"], [150, "g", "pearl onions"], [250, "g", "bacon"], [null, null, "'Bouquet garni'"], [2, "sprigs", "fresh thyme"], [2, "leaves", "'dried bay"], [2, "stalks", "leafy greens from the celery stalks"], [6, "sprigs", "fresh parsley"]]
            ], [
                'name' => "Lobster Bisque",
                'instructions' => "Gather the ingredients.
            Melt the butter in a large pan, once melted add the flour, a pinch of salt and pepper and the paprika. Stir well. 
            Slowly whisk in the milk, followed by the chicken stock, the white wine, and continue stirring until a smooth and slightly thickened to a cream-like consistency. (This stirring can take several minutes but spending the time at this stage of the bisque is critical to the success of the dish. Be careful not to let the mixture boil as this may cause the bisque to curdle.) 
            Add the onion, the carrots and simmer (again, do not boil) for 10 minutes. Add the cooked lobster meat and stir. Taste the bisque and adjust the seasoning to your liking. 
            Stir in the Cognac and finally, the cream. Heat through until piping hot. 
            Serve in hot bowls with a crusty baguette on the side. 
            Enjoy! ",
                'image' => "Lobster-Bisque.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[6, "tablespoons", "butter"], [6, "tablespoons", "flour"], [1, "teaspoon", "salt"], [null, null, "black pepper"], [1, "teaspoon", "paprika"], [4, "cups", "milk"], [1, "cups", "chicken stock"], [1, "dl", "white wine"], [3, "tablespoons", "onion"], [3, "tablespoons", "carrot"], [3, "cups", "cooked lobster meat"], [1, "tablespoon", "Cognac"], [0.5, "cup", "heavy cream"]]
            ], [
                'name' => "Lobster Bisque",
                'instructions' => "Gather the ingredients.
            Melt the butter in a large pan, once melted add the flour, a pinch of salt and pepper and the paprika. Stir well. 
            Slowly whisk in the milk, followed by the chicken stock, the white wine, and continue stirring until a smooth and slightly thickened to a cream-like consistency. (This stirring can take several minutes but spending the time at this stage of the bisque is critical to the success of the dish. Be careful not to let the mixture boil as this may cause the bisque to curdle.) 
            Add the onion, the carrots and simmer (again, do not boil) for 10 minutes. Add the cooked lobster meat and stir. Taste the bisque and adjust the seasoning to your liking. 
            Stir in the Cognac and finally, the cream. Heat through until piping hot. 
            Serve in hot bowls with a crusty baguette on the side. 
            Enjoy! ",
                'image' => "Lobster-Bisque.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["France"],
                'ingredients' => [[6, "tablespoons", "butter"], [6, "tablespoons", "flour"], [1, "teaspoon", "salt"], [null, null, "black pepper"], [1, "teaspoon", "paprika"], [4, "cups", "milk"], [1, "cups", "chicken stock"], [1, "dl", "white wine"], [3, "tablespoons", "onion"], [3, "tablespoons", "carrot"], [3, "cups", "cooked lobster meat"], [1, "tablespoon", "Cognac"], [0.5, "cup", "heavy cream"]]
            ], [
                'name' => "Chicken mole enchiladas",
                'instructions' => "You will need two frying pans. Place the mole sauce in one of the frying pans and set over medium low heat. Have a plate covered with paper towels ready. (Please check the ingredients list below)
                Meanwhile, add the vegetable oil in the other frying pan and turn the heat to high. Once the oil is hot, turn down the heat to medium and start frying the tortillas in a fast pace, turning once. The tortilla should turn soft but without any excess oil. Place the tortillas over the paper towel-covered plate to absorb the oil. Keep them warm.
                After frying all the tortillas, dip them one by one with the help of kitchen tongs (or your hand and a large spatula) into the warm mole sauce, making sure it is completely submerged. This is also a step that’s done quickly, to avoid breaking the tortillas.
                Place the tortilla on a plate and add the chicken filling right at the center.
                Chicken Mole Enchiladas | quick and easy
                Fold the tortilla and, with the help of your spatula, place the enmolada on your serving plates. If needed, spoon some more mole sauce over the enmoladas.        
                Chicken Mole Enchiladas | Authentic Mexican Food Recipes
                Just before serving, garnish with the crumbled cheese and finely sliced onions.",
                'image' => "chicken-mole.enchiladas.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Mexico"],
                'ingredients' => [[300, "grams", "chicken"], [3, "cups", "mole sauce"], [12, null, "torillas"], [3, "tablespoons", "vegetable oil"], [150, "gram", "fresh cheese"], [1, null, "onion"]]
            ], [
                'name' => "Pozole Rojo",
                'instructions' => "Cut the pork off the bone in large chunks. Sprinkle salt and pepper liberally over all the chunks, including the bone. Pop the stems off the dried chiles and shake out the loose seeds.
                Set a heavy 6-8 quart dutch oven over medium heat. Add the oil to the pot. Once hot add the pork chunks, including the bone. Brown the pork on all sides.
                Move the pork to the sides of the pot. Add in the onion wedges and garlic. Sear for 1-2 minutes, then add in the chile peppers, bay leaves, oregano, 6 cups chicken broth, and 1 teaspoon salt. Push the chiles down under the liquid.
                Cover the pot with a heavy lid and bring to a boil. Then lower the heat and simmer for 50-60 minutes, until the pork is soft enough to shred. (Keep the pot covered.)
                Remove the pork chunks, bone, and bay leaves. Discard the bone and bay leaves. Use tongs or forks to shred the pork into small chunks.
                Use an immersion blender to puree the vegetables, chiles, and broth into a thick sauce. You can also do this is a standard blender, but cover the lid with a towel, to protect against hot liquid splashing out.
                Add the shredded pork back to the pot, along with the rinsed hominy. Stir to combine. If the sauce seems too thick add 1+ cup chicken broth or water to the pot.
                Stir in the lime juice. Taste, then season with salt and pepper as needed. Keep warm until ready to serve.
                To serve: Ladle the posole into bowls. Garnish the top with tortilla chips, sliced avocado, radishes, lime wedges, and cilantro.",
                'image' => "pozole-rojo.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Mexico"],
                'ingredients' => [[2, "tablespoons", "olive oil"], [4, "pounds", "pork leg"], [1, null, "onion"], [7, "cloves", "garlic"], [6, "dried", "ancho chile peppers"], [5, "dried", "dried guajillo chile peppers"], [4, "dried", "dried arbol chile peppers"], [2, null, "bay leaves"], [1, "tablespoon", "dried Mexican Oregano"], [6, "cups", "chicken broth"], [3, "cans", "white hominy"], [1, null, "lime"], [null, null, "salt"], [null, null, "pepper"]]
            ], [
                'name' => "Mexican Torta",
                'instructions' => "    Place the chicken breast halves in between plastic wrap and use a meat mallet or rolling pin to gently pound them until thin.
                Place a skillet over medium-high heat and coat with oil. Add breadcrumbs to a shallow bowl. Add eggs to another shallow bowl and beat well.
                Dip the chicken in the egg mixture on both sides, and then coat with breadcrumbs on both sides. 
                Place in the pan with the hot oil. Cook for a a few minutes on one side, until browned, then flip and cook on the other side until cooked through.
                Slice the ciabatta rolls in half and toast them.
                On the inside top half of the roll, spread a thin layer of mayonnaise, followed by a thin layer of refried beans and then a thin layer of mashed avocado. 
                Top the bottom half of the roll with cooked chicken, a few strings of mozzarella cheese, and a few pickled jalapeños. 
                Sandwich the roll together. Serve immediately.",
                'image' => "mexican-torta.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Mexico"],
                'ingredients' => [[4, null, "chicken breasts"], [4, null, "rolls - torta/ciabatta"], [0.25, "cup", "mayonnaise"], [0.3, "cup", "refried beans"], [1, "half", "avocado"], [2, null, "mozzarelas"], [1, "cup", "breadcrumbs"], [2, "large", "eggs"], [4, "tablespoons", "oil"], [1, "can", "Jalapenos"]]
            ], [
                'name' => "Chiltomate",
                'instructions' => "    Preheat a griddle or a large heavy skillet over medium-high heat. Roast the vegetables and the garlic on the griddle for 6 to 8 minutes, turning them with tongs to brown all sides.
                Peel the chile and discard the skin and seeds. Peel and dice the onion, tomatoes and garlic.
                Place the roasted ingredients and dried oregano in a mortar, blender or food processor, and grind or chop to the desired consistency.
                Warm the oil in a large skillet over medium-high heat. Add the salsa and sauté for 2 to 3 minutes.
                Stir in the fresh oregano and cilantro, and season to taste with salt. Serve warm or at room temperature.",
                'image' => "chiltomate.jpg",
                'isVegan' => true,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Mexico"],
                'ingredients' => [[2, null, "habaneros peppers"], [1, "large", "onion"], [6, "medium", "tomatoes"], [3, "cloves", "garlic"], [3, "tablespoons", "vegetable oil"], [2, "teaspoons", "oregano"], [1, "tablespoon", "cilantro"], [null, null, "salt"]]
            ], [
                'name' => "Tacos de papa",
                'instructions' => "    Boil potatoes and peel. Heat oil for frying.
                Mash potatoes with a masher and mix with onions and the 4 ounces of queso fresco. (if mixture is too thick, add a little milk. mixture should be a little lumpy, but should not be as creamy as mashed potatoes.) Season with salt and pepper.
                Warm tortillas in microwave for about 15 seconds.
                Spoon potato mixture into tortillas and fry until golden on both sides.
                Serve and garnish with lettuce, queso fresco, and salsa.",
                'image' => "tacos-de-papa.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Mexico"],
                'ingredients' => [[6, "large", "potatoes"], [120, "gram", "mexican crumbly cheese"], [1, "medium", "onion"], [null, null, "salt"], [null, null, "pepper"], [null, "if needed", "milk"], [null, null, "oil"], [1, "large", "onion"], [24, null, "corn tortillas"], [null, null, "lettuce"], [null, null, "fresh cheese"], [null, null, "salsa"]]
            ], [
                'name' => "Pão de Queijo",
                'instructions' => "Preheat oven to 400°F. Spread a small amount olive oil around the insides of each well of a mini-muffin tin. 
                Put all of the ingredients into a blender and pulse until smooth. You may need to use a spatula to scrape down the sides of the blender so that everything gets blended well. At this point you can store the batter in the refrigerator for up to a week. 
                Pour batter into prepared mini-muffin tin, not quite to the top; leave about 1/8 inch from the top. 
                Bake at 400°F in the oven for 15-20 minutes, until all puffy and nicely browned. Remove from oven and let cool on a rack for a few minutes. 
                Eat while warm or save to reheat later.
                Note that Brazilian cheese bread is very chewy, a lot like Japanese mochi. ",
                'image' => "pao-de-queijo.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Brazil"],
                'ingredients' => [[1, "large", "egg"], [0.33, "cup", "extra virgin olive oil"], [0.66, "cup", "milk"], [1.5, "cups", "tapioca flour"], [0.5, "cup", "cheese"], [1, "teaspoon", "salt"]]
            ], [
                'name' => "Feijoada",
                'instructions' => "Pour boiling water over the black beans and let them sit while you prepare the rest of the stew. 
                Heat the olive oil in a large pot over medium-high heat and brown the pork shoulder. When the meat has browned, remove the meat from the pot, set aside. 
                Add the onions to the pot. Brown them, stirring occasionally, scraping up any browned bits from the bottom of the pot.
                Sprinkle a little salt over the onions and add the garlic. Stir well and sauté 2 more minutes. 
                Add back the pork shoulder, and the other meats and add enough water to cover. Add the bay leaves, cover and bring to a simmer. Cook gently for 1 hour. 
                Drain the black beans from their soaking liquid and add them to the stew. Simmer gently, covered, until the beans are tender, about an hour and a half. 
                Add the tomatoes, stir well and taste for salt, adding if it's needed. Simmer this, uncovered, until the meat begins to fall off the ham hock, which will probably take 2-3 hours. ",
                'image' => "feijoada.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Brazil"],
                'ingredients' => [[450, "gram", "black beans"], [4, "tablespoons", "extra virgin olive oil"], [450, "gram", "pork shoulder"], [2, "large", "onions"], [1, "head", "garlic"], [450, "gram", "corned boof"], [225, "gram", "fresh sausage - chorizo or Italian sausage"], [450, "gram", "smoked sausage - linguica or kielbasa"], [1, null, "smoked ham hock"], [4, null, "bay leaves"], [1, "can", "crushed tomatoes"], [null, null, "salt"]]
            ], [
                'name' => "Feijão Tropeiro",
                'instructions' => "Start by cooking your beans. My preferred method is using a pressure cooker: combine the beans, bay leaves and water in your pot. Secure the lid and bring it to the stove, over high heat. When it reaches high pressure, reduce the heat to medium and cook for 20 minutes. Turn off the heat and allow the pot to cool down and release all the pressure naturally. When ready to open, unlock and remove the lid. Check if the beans are al dente. If not, cook them longer, in 5 minute increments. (Note: this method is for stove top pressure cookers. If you are using an electric pressure cooker, follow your cooker's instructions to cook beans.)
                You can also cook your beans the conventional way, on the stove, but it will take longer. Just bring the beans, bay leaves and water to a boil, over medium-high heat. When boiling, reduce to a simmer and cook uncovered, until al dente, adding more water as needed to keep the beans submerged. The cooking process can take anywhere from 1 to 3 hours. Be patient!
                When the beans are done, drain all the water and reserve.
                Remove the stems of the collard greens leaves. Then, stack a few leaves on top of each other and roll that stack into a cylinder. Using a chef knife, slice the collard greens into thin strips. Repeat with all the leaves.
                Place the oil in a medium-sized skillet and place it over medium heat. Whisk the eggs in a bowl and add them to the pan. Cook, stirring gently, until they are scrambled. Reserve.
                Heat 2 tablespoons of olive oil in a large saute pan over medium heat. Add 3 cloves of garlic and cook, stirring often, until golden and fragrant, about 2 minutes. Add the collard greens and cook until withered, about 5 minutes. Season with salt and pepper and reserve.
                Using that same pan, over medium heat, heat 1 tablespoon of olive oil and brown the sausage until it starts to get crispy, about 5 minutes. Remove from the pan and reserve. Discard the fat.
                In the same pan, add the bacon and fry until golden brown, about 3 minutes. Then, stir in the onions and remaining garlic, cooking until translucent (about 3 more minutes). Add the drained beans and the sausage and cook for a minute, letting the beans soak up all those amazing flavors. Then, add the eggs and the collard greens, stirring until everything is well combined. Season generoulsy with salt and pepper. Then, add the manioc flour (to taste), a handful at a time, stirring until it is moist and incorporated into the dish.
                Remove the pan from the heat and sprinkle the parsley and green onions.
                Serve immediately!",
                'image' => "feijao.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Brazil"],
                'ingredients' => [[1, "pound", "carioca beans"], [2, null, "bay leaves"], [6, "cups", "water"], [1, "bunch", "collard greens"], [4, "tablespoons", "olive oil"], [14, "ounces", "calabresa sausage"], [0.5, "pound", "bacon"], [1, "large", "onion"], [6, "cloves", "garlic"], [5, null, "eggs"], [1, "cup", "manioc flour"], [null, null, "salt"],  [null, null, "pepper"],  [null, null, "parsley"],  [null, null, "green onion"]]
            ], [
                'name' => "Moqueca Baiana",
                'instructions' => "Place fish and shrimp in a large bowl. Season with the lime juice, salt and pepper. Reserve in the fridge.
                In a large clay pot (or dutch oven), heat 2 tablespoons olive oil over medium heat. Add the garlic and chopped chili pepper and cook until fragrant, about 1 minute.
                Arrange half of the tomato slices on the bottom of the pot. Then add a layer of half the bell peppers, half the sliced onions, half of the fish, half of the shrimp and 1/3 of the cilantro. Season gently with salt and pepper, and drizzle with olive oil. Repeat the layering with all the ingredients, making sure to season again at the end. Reserve 1/3 of the cilantro for garnishing before serving.
                Pour the coconut milk, add the dendê oil and the crumbled bouillon, and bring to a boil over medium-high heat. Then cover, lower the heat to a simmer and cook for 15 minutes, or until the onions are tender and the fish and shrimp are cooked through. Be careful not to overcook it, as you don't want the fish to fall apart. Taste and adjust seasonings. Add more dendê oil, if desired.
                Garnish with the reserved cilantro and serve with white rice.",
                'image' => "moqueca-baiana.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Brazil"],
                'ingredients' => [[2, "pounds", "sea bass"], [1, "pound", "shrimps"], [1, null, "lime"], [0.33, "cup", "olive oil"], [2, "cloves", "garlic"], [1, null, "red chilli pepper"], [2, "large", "tomatoes"], [1, null, "green bell pepper"], [1, null, "red bell pepper"], [1, "large", "onion"], [1, "bunch", "cilantro"], [1, "can", "coconut milk"], [2, "tablespoons", "red palm oil"], [1, null, "buillon"], [null, null, "salt"],  [null, null, "pepper"]]
            ], [
                'name' => "Empadão de Frango",
                'instructions' => "Make the filling:
                In a large sauté pan, over medium heat, add the olive oil and, once hot, sauté the onions and garlic until translucent, about 2 minutes.
                Add the tomatoes and cook them with the onions and garlic for a couple of minutes, until softened.
                Add the shredded chicken,olives, corn (if using), peas (if using), hearts of palm (if using), tomato sauce, hot sauce and stir to combine. Then, add the chicken broth and the flour dissolved in milk. Lower the heat to medium low and cook, stirring often, until most of the liquid is gone and the filling is creamy and lightly thickened, about 10 minutes.
                Add the chopped parsley and stir to incorporate.
                Taste for seasoning and season with salt and pepper to taste.
                Cool completely before assembling the pie.
                Making the crust:
                Combine the flour and the salt in a large bowl.
                Add the egg yolks and stir using a wooden spoon.
                Then add the butter and use your fingers to work the butter into the flour, until the mixture resembles coarse sand. Add the water, a few tablespoons of a time, and continue working with your fingers until the dough comes together. You might not need all the water!
                Wrap the dough and chill for 20 minutes.
                Preheat oven to 350F degrees.
                When the dough is chill, cut 1/3 of the dough and reserve. Roll out the remaining dough to about 12\" round. Place the pastry in a 9-inch spring form pan, making sure the dough also covers the sides (since we have lots of filling!), and prick it all over with a fork.
                Add the cold filling, smoothing it out so its evenly distributed.
                Then, roll out the remaining dough and place it on top of the filling, sealing the pie and tucking the edges.
                Using a knife, make two cuts in the center of the top crust, so that steam can escape while baking.
                Brush the pie with the lightly beaten egg yolk.
                Bake in the preheated oven for 25 to 35 minutes or until golden brown and the filling piping hot.
                Remove from oven and allow to cool slightly before serving.",
                'image' => "empadao-de-frango.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Brazil"],
                'ingredients' => [[2, "tablespoons", "olive oil"], [2, "medium", "onions"], [2, "cloves", "garlic"], [2, null, "tomatoes"], [2, "pounds", "chicken breasts"], [0.5, "cup", "green olives"], [1, "cup", "corn (optional)"], [1, "cup", "green peas (optional)"], [1, "cup", "hearts of palm (optional)"], [1, "cup", "tomato sauce"], [null, null, "hot sauce"], [2, "cups", "chicken broth"], [1, "tablespoon", "flour dissolved in 1/3 cup milk"], [0.5, "cup", "parsley"], [null, null, "salt"],  [null, null, "pepper"], [5, "cups", "flour"], [1, "teaspoon", "salt"], [3, null, "egg yolks"], [0.5, "cup", "water"], [12, "ounces", "butter"], [1, null, "egg yolk"]]
            ], [
                'name' => "Black risotto",
                'instructions' => "Remove innards from squid by pulling tentacles from the body and carefully remove the ink sac. Place the sacs in a glass with some extra virgin olive oil.
                Remove the skin, wings, backbone, and eyes. Wash and cut the squid into smaller pieces (1cm).
                Heat the olive oil in a large skillet with high sides and add the finely chopped onion and garlic. Cook shortly until golden brown, then add the squid bits.
                Cook for ca 2 minutes, tossing occasionally, then add the wine.
                When wine evaporates, add the rice and cook, stirring constantly until it turns opaque.
                Gradually add the stock and cook over medium heat, stirring occasionally.
                After 5 minutes, add squid ink, stir well and proceed by adding the rest of fish stock.
                When the rice is cooked, remove from the fire, add parsley and season with salt and pepper.
                Serve with parmesan cheese.",
                'image' => "black-risotto.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Croatia"],
                'ingredients' => [[300, "gram", "rice"], [500, "gram", "squid"], [250, "gram", "gamberetti (optional)"], [2, "sacs", "squid ink"], [2, "cloves", "garlic"], [2, "medium", "onions"], [2, "dl", "red wine"], [700, "ml", "fish stock"], [1, "tablespoon", "fresh parsley"], [null, null, "extra virgin olive oil"], [null, null, "salt"], [null, null, "pepper"],  [null, null, "parmesan"]]
            ], [
                'name' => "Fritule",
                'instructions' => "Grate the apple. 
                Proof the yeast by dissolving it and 1 teaspoon sugar in 1 cup of warm water (not over 110 F). When it foams, pour into a large bowl and add flour, salt, raisins, walnuts, grated apple, and zest, and mix well. Add 3 to 4 cups water, or as much as necessary to achieve a cake batter consistency. Cover the bowl with plastic wrap and let the batter rise until doubled, about 1 hour. 
                In a heavy-bottomed pan or Dutch oven, heat oil to 370 F. Carefully drop tablespoons of batter into the oil, being careful not to overcrowd. Fry until golden on the bottom. Turn over once to brown both sides. 
                Remove the fritules with a slotted spoon onto layers of paper towels to drain. Repeat until batter is finished. Sprinkle fritule with powdered sugar while still hot, if desired. 
                Serve immediately and enjoy! ",
                'image' => "fritule.jpg",
                'isVegan' => true,
                'isVegeterian' => true,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => false,
                'countries' => ["Croatia"],
                'ingredients' => [[1, "package", "active dry yeast"], [1, "teaspoon", "sugar"], [8, "cups", "flour"], [1, "teaspoon", "salt"], [1, "cup", "raisins"], [0.5, "cup", "walnuts"], [1, null, "apple"], [2, "teasponns", "lemon zest"], [4, "cups", "water"], [3, "cups", "oil"]]
            ], [
                'name' => "Pašticada",
                'instructions' => "Wash and wipe the meat and then insert the pieces of bacon in it using a knife. Salt, as desired, spread mustard over the meat and place it in the “pajc” (a container with a mixture of the apple cider vinegar and oil enough to cover the meat). Let it marinate like this for at least 5 hours (overnight, preferably).
                Brown the meat in hot oil (all sides). Remove it from the pan and quickly sauté the chopped onion, garlic, and vegetables.
                Return the meat to the pan along with the red wine & simmer covered for about 2 hours. If required, add small amounts of red wine mixed with water and touch of sugar (dalmatian prošek works great as a replacement for this) as the meat cooks – it needs to be tender.
                When the meat is tender, add tomato concentrate, diced prunes, and figs along with the apple quarters.
                At the end of the cooking, stir in the bay leaf, rosemary, thyme &  minced cloves.
                Add pepper and a little salt, try it and, if necessary, add a little bit of cooking chocolate. Balance the flavor with a bit of red wine and plums in order to get a sweet & sour taste to your liking.
                Remove the meat, cut it into slices, and place on a heated plate.
                Purée the vegetables with roast the drippings and pour it over the meat.
                Serve with gnocchi and a slice of lemon.",
                'image' => "pasticada.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => false,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Croatia"],
                'ingredients' => [[2, "kilogram", "beef"], [20, "gram", "bacon"], [200, "gram", "onions"], [150, "grams", "parsley root"], [150, "grams", "carrot"], [50, "grams", "celery root"], [2, "cloves", "garlic"], [20, "grams", "tomato paste"], [200, "ml", "oil"], [null, null, "apple cider"], [10, "gram", "cloves"], [10, "dried", "plums"], [6, "dried", "figs"], [2, null, "apples"], [300, "ml", "red wine"], [2, "tablespoons", "mustard"], [3, null, "bay leaves"], [null, null, "thyme"], [null, null, "rosemary"], [null, null, "coocking chocolate"], [null, null, "salt"], [null, null, "pepper"]]
            ], [
                'name' => "Bučnica",
                'instructions' => "Grate the apple. 
                Proof the yeast by dissolving it and 1 teaspoon sugar in 1 cup of warm water (not over 110 F). When it foams, pour into a large bowl and add flour, salt, raisins, walnuts, grated apple, and zest, and mix well. Add 3 to 4 cups water, or as much as necessary to achieve a cake batter consistency. Cover the bowl with plastic wrap and let the batter rise until doubled, about 1 hour. 
                In a heavy-bottomed pan or Dutch oven, heat oil to 370 F. Carefully drop tablespoons of batter into the oil, being careful not to overcrowd. Fry until golden on the bottom. Turn over once to brown both sides. 
                Remove the fritules with a slotted spoon onto layers of paper towels to drain. Repeat until batter is finished. Sprinkle fritule with powdered sugar while still hot, if desired. 
                Serve immediately and enjoy! ",
                'image' => "bucnica.jpg",
                'isVegan' => false,
                'isVegeterian' => true,
                'isLactoseFree' => false,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Croatia"],
                'ingredients' => [[500, "gram", "phylo dough"], [5, null, "zucchinis"], [500, "gram", "ricotta"], [2, "teaspoons", "salt"], [100, "gram", "sour cream"], [2, null, "eggs"], [null, null, "oil"]]
            ], [
                'name' => "Lamb Peka",
                'instructions' => "Grate the apple. 
                Proof the yeast by dissolving it and 1 teaspoon sugar in 1 cup of warm water (not over 110 F). When it foams, pour into a large bowl and add flour, salt, raisins, walnuts, grated apple, and zest, and mix well. Add 3 to 4 cups water, or as much as necessary to achieve a cake batter consistency. Cover the bowl with plastic wrap and let the batter rise until doubled, about 1 hour. 
                In a heavy-bottomed pan or Dutch oven, heat oil to 370 F. Carefully drop tablespoons of batter into the oil, being careful not to overcrowd. Fry until golden on the bottom. Turn over once to brown both sides. 
                Remove the fritules with a slotted spoon onto layers of paper towels to drain. Repeat until batter is finished. Sprinkle fritule with powdered sugar while still hot, if desired. 
                Serve immediately and enjoy! ",
                'image' => "lamb-peka.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => true,
                'isNutFree' => true,
                'countries' => ["Croatia"],
                'ingredients' => [[600, "gram", "potatoes"], [1, null, "zucchini"], [1, null, "carrot"], [1, null, "pepper"], [1, "small", "aubergine"], [1, "large", "onion"], [850, "gram", "diced lamb"], [4, "cloves", "garlic"], [1, "tablespoon", "tomato puree"], [80, "ml", "olive oil"], [null, null, "fresh herbs"], [250, "ml", "white wine"], [null, null, "salt"], [null, null, "pepper"]]
            ], [
                'name' => "Greek Sausage and Peppers",
                'instructions' => "In a 7- or 8-qt. slow cooker, combine sausage, sweet peppers, onion, stock, garlic,
                oregano, salt and pepper. Cook, covered, on low until vegetables are tender, 5-6 hours. Add tomatoes;
                cook until wilted, about 30 minutes longer. If desired, serve with rice.",
                'image' => "Greek-Sausage-and-Peppers.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Greece"],
                'ingredients' => [
                    [4, "pounds", "loukaniko"], [3, "pieces", "peppers"], [1, "piece", "sweet onion"],
                    [2, "cups", "beef stock"], [1, "whole", "garlic bulb"], [1, "tablespoon", "minced fresh oregano"], [1, "teaspoon", "coarse sea salt"],
                    [1, "teaspoon", "coarsely ground pepper"], [3, "cups", "cherry tomatoes"]
                ]
            ],

            [
                'name' => "Greek Shrimp Canapes",
                'instructions' => " In a large bowl, whisk the first 5 ingredients until blended. Pour 1-1/2 cups
                marinade into a large bowl. Add shrimp and stir to coat. Cover and refrigerate 45 minutes.
                Meanwhile, pour remaining marinade in a 4- or 5-qt. slow cooker. Cook, covered, on high, 45 minutes.
                Drain shrimp, discarding marinade in bowl. Add shrimp to slow cooker. Cook, covered, on high until
                shrimp turn pink, about 20 minutes, stirring once; drain.
                Cut each cucumber into 1/4-in.-thick slices. Scoop out centers, leaving bottoms intact. Pipe cream cheese onto each cucumber slice;
                top with shrimp and parsley.",
                'image' => "Greek-Shrimp-Canapes.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Greece"],
                'ingredients' => [
                    [1.5, "cups", "olive oil"], [0.75, "cup", "lemon juice"], [0.66, "cup", "dry white wine"],
                    [0.25, "cup", "Greek seasoning"], [4, "pcs", "garlic cloves"], [1, "pound", "uncooked shrimp"], [2, "pcs", "large cucumbers"],
                    [1, "package", "cream cheese, softened"], [null, null, "Minced fresh parsley"]
                ]
            ],

            [
                'name' => "Greek-Style Lentil Soup",
                'instructions' => " Place the water, broth, lentils, carrots, onion, celery and 1/2 teaspoon oregano
                in a 5- or 6-qt. slow cooker. Cook, covered, on low 4-5 hours or until lentils are tender.
                Stir in the spinach, tomato sauce, olives, vinegar, garlic, salt, pepper and remaining 1/2 teaspoon oregano.
                Cook, covered, on low about 1 hour longer, until spinach is wilted. If desired, serve with red onion, parsley and lemon wedges.",
                'image' => "Greek-Style-Lentil-Soup.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Greece"],
                'ingredients' => [
                    [4, "cups", "water"], [4, "cups", "vegetable broth"], [2, "cups", "dried lentils, rinsed"],
                    [2, "pieces", "carrots"], [1, "pcs", "onion"], [1, "pcs", "celery rib"], [1, "teaspoon", "dried oregano"],
                    [1, "cup", "chopped fresh spinach"], [0.5, "cup", "tomato sauce"], [1, "can", "sliced ripe olives"], [3, "tablespoons", "red wine vinegar"],
                    [2, "pcs", "garlic cloves"], [0.5, "teaspoon", "salt"], [0.25, "teaspoon", "pepper"]
                ]
            ],

            [
                'name' => "Melomakarona",
                'instructions' => " Preheat oven to 350°. In a saucepan, combine sugar, water and honey; bring to a boil. Reduce heat; simmer, uncovered, 10 minutes. Cool completely.
                Meanwhile, for cookies, in a large bowl, beat confectioners' sugar and oil until blended. Beat in Cognac, orange juice and honey. In another bowl, whisk flour, orange zest, baking powder and cinnamon; gradually beat into sugar mixture.
                Shape tablespoons of dough into 1-in.-thick ovals. Place 1 in. apart on parchment-lined baking sheets. Bake until lightly browned, 20-25 minutes. Cool on pans 5 minutes. Remove to wire racks.
                Float and turn warm cookies in syrup about 10 seconds; allow excess to drip off. Place on waxed paper; sprinkle with walnuts. Let stand until set. Store between pieces of waxed paper in airtight containers.",
                'image' => "Melomakarona.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Greece"],
                'ingredients' => [
                    [1, "cup", "sugar"], [1, "cup", "water"], [0.75, "cup", "honey"],
                    [1, "cup", "confectioners' sugar"], [2, "cups", "olive oil"], [0.5, "cup", "Cognac"], [0.5, "cup", "orange juice"],
                    [1, "tablespoon", "honey"], [7.5, "cups", "all-purpose flour"], [4, "teaspoons", "grated orange zest"], [3, "teaspoons", "baking powder"],
                    [1, "teaspoon", "ground cinnamon"], [0.5, "cup", "ground toasted walnuts"]
                ]
            ],

            [
                'name' => "Greek Chicken & Rice",
                'instructions' => " Sprinkle chicken with garlic powder and pepper. In a large skillet, heat oil over medium heat. Add chicken; cook and stir until no longer pink, 8-10 minutes. Stir in artichokes, roasted peppers, tomatoes and olives. Cook and stir until heated through, 3-5 minutes.
                Meanwhile, prepare rice according to package directions. Serve with chicken. Sprinkle with parsley.",
                'image' => "Greek-Chicken-Bowls.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Greece"],
                'ingredients' => [
                    [1, "pound", "boneless skinless chicken breasts"], [0.25, "teaspoon", "garlic powder"], [0.25, "teaspoon", "pepper"],
                    [2, "teaspoons", "olive oil"], [1, "jar", "marinated quartered artichoke hearts"], [1, "jar", "Croasted sweet red peppers"],
                    [0.33, "cup", "oil-packed sun-dried tomatoes"],
                    [0.33, "cup", "Greek olives"], [1, "package", "ready-to-serve brown rice"], [1, "tablespoon", "minced fresh parsley"]
                ]
            ],

            [
                'name' => "Georgia Caviar",
                'instructions' => "Place black-eyed peas in a large saucepan with enough water to cover. Bring to a boil.
                Reduce heat and simmer 90 minutes, or until black-eyed peas are tender.
                Drain black-eyed peas. Cover with Italian-style salad dressing.
                In a large bowl, mix together jalapeno, onion, pimento peppers, garlic, green bell pepper,
                and ground black pepper. Toss in black-eyed pea mixture. Chill in the refrigerator 8 hours or overnight before serving.",
                'image' => "Georgia-Caviar.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Georgia"],
                'ingredients' => [
                    [1, "pound", "dry black-eyed peas"], [2, "cups", "Italian-style salad dressing "], [0.5, "cup", "diced jalapeno chile pepper"],
                    [1.5, "cups", "finely chopped onion"], [2, "ounces", "diced pimento peppers"], [1, "tablespoon", "minced garlic"],
                    [2, "cups", "diced green bell pepper"],
                    [1, "pinch", "ground black pepper"]
                ]
            ],

            [
                'name' => "Crawfish Etouffee Georgia Style",
                'instructions' => "Melt butter in a large cast iron skillet over medium heat. Stir in onion, celery root,
                and bell peppers; cook and stir until the onion has softened and turned translucent, 8 to 10 minutes.
                Stir in crawfish, garlic, and bay leaves. Cook, stirring occasionally, for 10 to 12 minutes.
                Whisk flour into chicken broth and water in a bowl until smooth; pour into crawfish mixture. Season with smoked salt and cayenne pepper.
                Bring mixture to a boil. Reduce heat to medium; cook and stir until mixture thickens, about 4 minutes. Stir in parsley and green onions;
                cook 2 minutes more.",
                'image' => "Etouffee.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Georgia"],
                'ingredients' => [
                    [0.5, "cup", "unsalted butter"], [2, "cups", "chopped sweet onions"], [1, "cup", "celery root"],
                    [2.5, "teaspoon", "chopped green bell pepper "], [1, "pound", "peeled crawfish tails"], [2, "teaspoons", "minced garlic"],
                    [3, null, "bay leaves"],
                    [1.5, "tablespoon", "all-purpose flour"], [0.5, "cup", "low-sodium chicken broth"],
                    [0.5, "cup", "water"]
                ]
            ],

            [
                'name' => "Gozinaki",
                'instructions' => "Place apricot pieces in a small bowl. Add rum and almond extract, and mix well to coat each piece. Set aside.
                Toast walnuts lightly at 350° F for 10 minutes; then chop them coarsely. In a deep saucepan,
                bring the honey and pomegranate molasses to a boil. Stir in the nuts and apricot pieces.
                Cook while stirring over medium-low heat for 10 to 12 minutes, until the mixture is thick.
                Be careful not to burn it.
                Pour the mixture out onto a moistened wooden board or a baking sheet lined with parchment paper
                and lightly sprayed with cooking spray. Using a spatula, spread the mixture into a 1/2-inch thick rectangle. Let stand until hardened.",
                'image' => "Gozinaki.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Georgia"],
                'ingredients' => [
                    [3.5, "cups", "shelled walnuts"], [12, "pcs", "dried apricots"], [1, "tablespoon", "dark rum"],
                    [1, "teaspoon", "pure almond extract"], [0.66, "cup", "honey"], [0.33, "cup", "pomegranate molasses"]
                ]
            ],

            [
                'name' => "Khachapuri",
                'instructions' => " Make the dough: In the bowl of an electric mixer fitted with the dough hook attachment, mix the flour, yeast, sugar, and salt to combine. Add the butter and mix on low speed until the mixture looks crumbly, about 1 minute.
                Add the milk and water and mix the dough on low speed for 4 minutes. Raise the speed to medium and mix until the dough is very smooth, 2-3 minutes more.
                Transfer the dough to a large, oiled bowl and cover with plastic wrap. Let the dough rise for 1 1/2 to 2 hours, until the dough is puffed (it may not fully double in size).
                Divide the dough as desired: Cut into two even pieces for larger, more share-able khachapuri, or into four even pieces for smaller, individual khachapuri.
                Pat the dough into an oval shape with your hands. On a lightly floured surface, roll out the dough, maintaining the oval shape, into an oblong oval about 1/3-inch thick.
                Pick the dough up from the ends and transfer it to a parchment lined baking sheet. Gently stretch the dough when you transfer it to help elongate the oval a bit.
                Crumble the goat cheese evenly over the dough, leaving about 1 inch around the edge on all sides. Sprinkle the mozzarella evenly over the goat cheese.
                Working your way around the bread, fold the excess dough up and over the filling to create a little wall and encase it. Gently pinch the ends of the oval to help seal. Cover the breads with a piece of plastic wrap sprayed with nonstick spray, and let the bread rise for 30 minutes to 1 hour.
                Preheat the oven to 375° F. Brush the edges of the dough with egg wash.
                For small khachapuri, crack an egg on each piece, in the center of the bread. Transfer to the oven and bake until the crust is golden brown, the cheese is melted and lightly golden, and the egg white is set, but the yolk is still runny, 30 to 35 minutes.
                For large khachapuri, transfer the breads to the oven and bake for 15 to 20 minutes. Remove the breads from the oven and crack three eggs evenly over the center of each bread. Return to the oven and continue to bake for 25 to 30 minutes more, until the bread is golden, the cheese is melted, and the egg white is set but the yolks are still runny.
                Let the khachapuri cool for 5 to 10 minutes before serving warm.",
                'image' => "Khachapuri.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Georgia"],
                'ingredients' => [
                    [522, "g", "bread flour"], [1, "tablespoon", "instant active dry yeast"], [2, "tablespoons", "granulated sugar"],
                    [1, "teaspoon", "fine sea salt"], [142, "g", "unsalted butter"], [1, "cup", "whole milk, warmed"], [0.33, "cup", "water"]
                ]
            ],


            [
                'name' => "Chakapuli",
                'instructions' => "Place the meat in a medium, wide pot in one layer. Add a third of the herbs, tomatillos, and
                red pepper flakes. Add another layer of meat and then herbs. Season with salt and black pepper, drizzle the
                wine and lime juice, cover and let it cook over medium-low heat for 45 to 50 minutes until the meat is tender.
                Add the rest of the herbs, taste and adjust the seasonings. Turn the heat off in two minutes.",
                'image' => "Chakapuli.jpg",
                'isVegan' => false,
                'isVegeterian' => false,
                'isLactoseFree' => true,
                'isGlutenFree' => false,
                'isNutFree' => true,
                'countries' => ["Georgia"],
                'ingredients' => [
                    [2, "pounds", " lamb (with bones)"], [5, "pcs", "tomatillos"], [2, null, "lime juice"],
                    [2, "bunches", "tarragon"], [2, "bunches", "scallions"], [2, "cups", "dry white wine"], [null, null, "salt"]
                ]
            ]
        ];
    }

    public static function getCountries()
    {
        return [
            ["name" => "Afghanistan", "flag" => "AF.png"],
            ["name" => "Åland Islands", "flag" => "AX.png"],
            ["name" => "Albania", "flag" => "AL.png"],
            ["name" => "Algeria", "flag" => "DZ.png"],
            ["name" => "American Samoa", "flag" => "AS.png"],
            ["name" => "Andorra", "flag" => "AD.png"],
            ["name" => "Angola", "flag" => "AO.png"],
            ["name" => "Anguilla", "flag" => "AI.png"],
            ["name" => "Antarctica", "flag" => "AQ.png"],
            ["name" => "Antigua and Barbuda", "flag" => "AG.png"],
            ["name" => "Argentina", "flag" => "AR.png"],
            ["name" => "Armenia", "flag" => "AM.png"],
            ["name" => "Aruba", "flag" => "AW.png"],
            ["name" => "Australia", "flag" => "AU.png"],
            ["name" => "Austria", "flag" => "AT.png"],
            ["name" => "Azerbaijan", "flag" => "AZ.png"],
            ["name" => "Bahamas", "flag" => "BS.png"],
            ["name" => "Bahrain", "flag" => "BH.png"],
            ["name" => "Bangladesh", "flag" => "BD.png"],
            ["name" => "Barbados", "flag" => "BB.png"],
            ["name" => "Belarus", "flag" => "BY.png"],
            ["name" => "Belgium", "flag" => "BE.png"],
            ["name" => "Belize", "flag" => "BZ.png"],
            ["name" => "Benin", "flag" => "BJ.png"],
            ["name" => "Bermuda", "flag" => "BM.png"],
            ["name" => "Bhutan", "flag" => "BT.png"],
            ["name" => "Bolivia", "flag" => "BO.png"],
            ["name" => "Bosnia and Herzegovina", "flag" => "BA.png"],
            ["name" => "Botswana", "flag" => "BW.png"],
            ["name" => "Bouvet Island", "flag" => "BV.png"],
            ["name" => "Brazil", "flag" => "BR.png"],
            ["name" => "British Indian Ocean Territory", "flag" => "IO.png"],
            ["name" => "Brunei Darussalam", "flag" => "BN.png"],
            ["name" => "Bulgaria", "flag" => "BG.png"],
            ["name" => "Burkina Faso", "flag" => "BF.png"],
            ["name" => "Burundi", "flag" => "BI.png"],
            ["name" => "Cambodia", "flag" => "KH.png"],
            ["name" => "Cameroon", "flag" => "CM.png"],
            ["name" => "Canada", "flag" => "CA.png"],
            ["name" => "Cape Verde", "flag" => "CV.png"],
            ["name" => "Cayman Islands", "flag" => "KY.png"],
            ["name" => "Central African Republic", "flag" => "CF.png"],
            ["name" => "Chad", "flag" => "TD.png"],
            ["name" => "Chile", "flag" => "CL.png"],
            ["name" => "China", "flag" => "CN.png"],
            ["name" => "Christmas Island", "flag" => "CX.png"],
            ["name" => "Cocos (Keeling) Islands", "flag" => "CC.png"],
            ["name" => "Colombia", "flag" => "CO.png"],
            ["name" => "Comoros", "flag" => "KM.png"],
            ["name" => "Congo", "flag" => "CG.png"],
            ["name" => "Congo, The Democratic Republic of the", "flag" => "CD.png"],
            ["name" => "Cook Islands", "flag" => "CK.png"],
            ["name" => "Costa Rica", "flag" => "CR.png"],
            ["name" => "Cote D'Ivoire", "flag" => "CI.png"],
            ["name" => "Croatia", "flag" => "HR.png"],
            ["name" => "Cuba", "flag" => "CU.png"],
            ["name" => "Cyprus", "flag" => "CY.png"],
            ["name" => "Czech Republic", "flag" => "CZ.png"],
            ["name" => "Denmark", "flag" => "DK.png"],
            ["name" => "Djibouti", "flag" => "DJ.png"],
            ["name" => "Dominica", "flag" => "DM.png"],
            ["name" => "Dominican Republic", "flag" => "DO.png"],
            ["name" => "Ecuador", "flag" => "EC.png"],
            ["name" => "Egypt", "flag" => "EG.png"],
            ["name" => "El Salvador", "flag" => "SV.png"],
            ["name" => "Equatorial Guinea", "flag" => "GQ.png"],
            ["name" => "Eritrea", "flag" => "ER.png"],
            ["name" => "Estonia", "flag" => "EE.png"],
            ["name" => "Ethiopia", "flag" => "ET.png"],
            ["name" => "Falkland Islands (Malvinas)", "flag" => "FK.png"],
            ["name" => "Faroe Islands", "flag" => "FO.png"],
            ["name" => "Fiji", "flag" => "FJ.png"],
            ["name" => "Finland", "flag" => "FI.png"],
            ["name" => "France", "flag" => "FR.png"],
            ["name" => "French Guiana", "flag" => "GF.png"],
            ["name" => "French Polynesia", "flag" => "PF.png"],
            ["name" => "French Southern Territories", "flag" => "TF.png"],
            ["name" => "Gabon", "flag" => "GA.png"],
            ["name" => "Gambia", "flag" => "GM.png"],
            ["name" => "Georgia", "flag" => "GE.png"],
            ["name" => "Germany", "flag" => "DE.png"],
            ["name" => "Ghana", "flag" => "GH.png"],
            ["name" => "Gibraltar", "flag" => "GI.png"],
            ["name" => "Greece", "flag" => "GR.png"],
            ["name" => "Greenland", "flag" => "GL.png"],
            ["name" => "Grenada", "flag" => "GD.png"],
            ["name" => "Guadeloupe", "flag" => "GP.png"],
            ["name" => "Guam", "flag" => "GU.png"],
            ["name" => "Guatemala", "flag" => "GT.png"],
            ["name" => "Guernsey", "flag" => "GG.png"],
            ["name" => "Guinea", "flag" => "GN.png"],
            ["name" => "Guinea-Bissau", "flag" => "GW.png"],
            ["name" => "Guyana", "flag" => "GY.png"],
            ["name" => "Haiti", "flag" => "HT.png"],
            ["name" => "Heard Island and Mcdonald Islands", "flag" => "HM.png"],
            ["name" => "Holy See (Vatican City State)", "flag" => "VA.png"],
            ["name" => "Honduras", "flag" => "HN.png"],
            ["name" => "Hong Kong", "flag" => "HK.png"],
            ["name" => "Hungary", "flag" => "HU.png"],
            ["name" => "Iceland", "flag" => "IS.png"],
            ["name" => "India", "flag" => "IN.png"],
            ["name" => "Indonesia", "flag" => "ID.png"],
            ["name" => "Iran, Islamic Republic Of", "flag" => "IR.png"],
            ["name" => "Iraq", "flag" => "IQ.png"],
            ["name" => "Ireland", "flag" => "IE.png"],
            ["name" => "Isle of Man", "flag" => "IM.png"],
            ["name" => "Israel", "flag" => "IL.png"],
            ["name" => "Italy", "flag" => "IT.png"],
            ["name" => "Jamaica", "flag" => "JM.png"],
            ["name" => "Japan", "flag" => "JP.png"],
            ["name" => "Jersey", "flag" => "JE.png"],
            ["name" => "Jordan", "flag" => "JO.png"],
            ["name" => "Kazakhstan", "flag" => "KZ.png"],
            ["name" => "Kenya", "flag" => "KE.png"],
            ["name" => "Kiribati", "flag" => "KI.png"],
            ["name" => "Korea, Democratic People'S Republic of", "flag" => "KP.png"],
            ["name" => "Korea, Republic of", "flag" => "KR.png"],
            ["name" => "Kuwait", "flag" => "KW.png"],
            ["name" => "Kyrgyzstan", "flag" => "KG.png"],
            ["name" => "Lao People'S Democratic Republic", "flag" => "LA.png"],
            ["name" => "Latvia", "flag" => "LV.png"],
            ["name" => "Lebanon", "flag" => "LB.png"],
            ["name" => "Lesotho", "flag" => "LS.png"],
            ["name" => "Liberia", "flag" => "LR.png"],
            ["name" => "Libyan Arab Jamahiriya", "flag" => "LY.png"],
            ["name" => "Liechtenstein", "flag" => "LI.png"],
            ["name" => "Lithuania", "flag" => "LT.png"],
            ["name" => "Luxembourg", "flag" => "LU.png"],
            ["name" => "Macao", "flag" => "MO.png"],
            ["name" => "Macedonia, The Former Yugoslav Republic of", "flag" => "MK.png"],
            ["name" => "Madagascar", "flag" => "MG.png"],
            ["name" => "Malawi", "flag" => "MW.png"],
            ["name" => "Malaysia", "flag" => "MY.png"],
            ["name" => "Maldives", "flag" => "MV.png"],
            ["name" => "Mali", "flag" => "ML.png"],
            ["name" => "Malta", "flag" => "MT.png"],
            ["name" => "Marshall Islands", "flag" => "MH.png"],
            ["name" => "Martinique", "flag" => "MQ.png"],
            ["name" => "Mauritania", "flag" => "MR.png"],
            ["name" => "Mauritius", "flag" => "MU.png"],
            ["name" => "Mayotte", "flag" => "YT.png"],
            ["name" => "Mexico", "flag" => "MX.png"],
            ["name" => "Micronesia, Federated States of", "flag" => "FM.png"],
            ["name" => "Moldova, Republic of", "flag" => "MD.png"],
            ["name" => "Monaco", "flag" => "MC.png"],
            ["name" => "Mongolia", "flag" => "MN.png"],
            ["name" => "Montenegro", "flag" => "ME.png"],
            ["name" => "Montserrat", "flag" => "MS.png"],
            ["name" => "Morocco", "flag" => "MA.png"],
            ["name" => "Mozambique", "flag" => "MZ.png"],
            ["name" => "Myanmar", "flag" => "MM.png"],
            ["name" => "Namibia", "flag" => "NA.png"],
            ["name" => "Nauru", "flag" => "NR.png"],
            ["name" => "Nepal", "flag" => "NP.png"],
            ["name" => "Netherlands", "flag" => "NL.png"],
            ["name" => "Netherlands Antilles", "flag" => "AN.png"],
            ["name" => "New Caledonia", "flag" => "NC.png"],
            ["name" => "New Zealand", "flag" => "NZ.png"],
            ["name" => "Nicaragua", "flag" => "NI.png"],
            ["name" => "Niger", "flag" => "NE.png"],
            ["name" => "Nigeria", "flag" => "NG.png"],
            ["name" => "Niue", "flag" => "NU.png"],
            ["name" => "Norfolk Island", "flag" => "NF.png"],
            ["name" => "Northern Mariana Islands", "flag" => "MP.png"],
            ["name" => "Norway", "flag" => "NO.png"],
            ["name" => "Oman", "flag" => "OM.png"],
            ["name" => "Pakistan", "flag" => "PK.png"],
            ["name" => "Palau", "flag" => "PW.png"],
            ["name" => "Palestinian Territory, Occupied", "flag" => "PS.png"],
            ["name" => "Panama", "flag" => "PA.png"],
            ["name" => "Papua New Guinea", "flag" => "PG.png"],
            ["name" => "Paraguay", "flag" => "PY.png"],
            ["name" => "Peru", "flag" => "PE.png"],
            ["name" => "Philippines", "flag" => "PH.png"],
            ["name" => "Pitcairn", "flag" => "PN.png"],
            ["name" => "Poland", "flag" => "PL.png"],
            ["name" => "Portugal", "flag" => "PT.png"],
            ["name" => "Puerto Rico", "flag" => "PR.png"],
            ["name" => "Qatar", "flag" => "QA.png"],
            ["name" => "Reunion", "flag" => "RE.png"],
            ["name" => "Romania", "flag" => "RO.png"],
            ["name" => "Russian Federation", "flag" => "RU.png"],
            ["name" => "RWANDA", "flag" => "RW.png"],
            ["name" => "Saint Helena", "flag" => "SH.png"],
            ["name" => "Saint Kitts and Nevis", "flag" => "KN.png"],
            ["name" => "Saint Lucia", "flag" => "LC.png"],
            ["name" => "Saint Pierre and Miquelon", "flag" => "PM.png"],
            ["name" => "Saint Vincent and the Grenadines", "flag" => "VC.png"],
            ["name" => "Samoa", "flag" => "WS.png"],
            ["name" => "San Marino", "flag" => "SM.png"],
            ["name" => "Sao Tome and Principe", "flag" => "ST.png"],
            ["name" => "Saudi Arabia", "flag" => "SA.png"],
            ["name" => "Senegal", "flag" => "SN.png"],
            ["name" => "Serbia", "flag" => "RS.png"],
            ["name" => "Seychelles", "flag" => "SC.png"],
            ["name" => "Sierra Leone", "flag" => "SL.png"],
            ["name" => "Singapore", "flag" => "SG.png"],
            ["name" => "Slovakia", "flag" => "SK.png"],
            ["name" => "Slovenia", "flag" => "SI.png"],
            ["name" => "Solomon Islands", "flag" => "SB.png"],
            ["name" => "Somalia", "flag" => "SO.png"],
            ["name" => "South Africa", "flag" => "ZA.png"],
            ["name" => "South Georgia and the South Sandwich Islands", "flag" => "GS.png"],
            ["name" => "Spain", "flag" => "ES.png"],
            ["name" => "Sri Lanka", "flag" => "LK.png"],
            ["name" => "Sudan", "flag" => "SD.png"],
            ["name" => "Sur[iname", "flag" => "SR.png"],
            ["name" => "Svalbard and Jan Mayen", "flag" => "SJ.png"],
            ["name" => "Swaziland", "flag" => "SZ.png"],
            ["name" => "Sweden", "flag" => "SE.png"],
            ["name" => "Switzerland", "flag" => "CH.png"],
            ["name" => "Syrian Arab Republic", "flag" => "SY.png"],
            ["name" => "Taiwan, Province of China", "flag" => "TW.png"],
            ["name" => "Tajikistan", "flag" => "TJ.png"],
            ["name" => "Tanzania, United Republic of", "flag" => "TZ.png"],
            ["name" => "Thailand", "flag" => "TH.png"],
            ["name" => "Timor-Leste", "flag" => "TL.png"],
            ["name" => "Togo", "flag" => "TG.png"],
            ["name" => "Tokelau", "flag" => "TK.png"],
            ["name" => "Tonga", "flag" => "TO.png"],
            ["name" => "Trinidad and Tobago", "flag" => "TT.png"],
            ["name" => "Tunisia", "flag" => "TN.png"],
            ["name" => "Turkey", "flag" => "TR.png"],
            ["name" => "Turkmenistan", "flag" => "TM.png"],
            ["name" => "Turks and Caicos Islands", "flag" => "TC.png"],
            ["name" => "Tuvalu", "flag" => "TV.png"],
            ["name" => "Uganda", "flag" => "UG.png"],
            ["name" => "Ukraine", "flag" => "UA.png"],
            ["name" => "United Arab Emirates", "flag" => "AE.png"],
            ["name" => "United Kingdom", "flag" => "GB.png"],
            ["name" => "United States", "flag" => "US.png"],
            ["name" => "United States Minor Outlying Islands", "flag" => "UM.png"],
            ["name" => "Uruguay", "flag" => "UY.png"],
            ["name" => "Uzbekistan", "flag" => "UZ.png"],
            ["name" => "Vanuatu", "flag" => "VU.png"],
            ["name" => "Venezuela", "flag" => "VE.png"],
            ["name" => "Viet Nam", "flag" => "VN.png"],
            ["name" => "Virgin Islands, British", "flag" => "VG.png"],
            ["name" => "Virgin Islands, U.S.", "flag" => "VI.png"],
            ["name" => "Wallis and Futuna", "flag" => "WF.png"],
            ["name" => "Western Sahara", "flag" => "EH.png"],
            ["name" => "Yemen", "flag" => "YE.png"],
            ["name" => "Zambia", "flag" => "ZM.png"],
            ["name" => "Zimbabwe", "flag" => "ZW.png"]
        ];
    }
}
