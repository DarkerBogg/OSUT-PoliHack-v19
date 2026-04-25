export let searchCities = [];
export let searchInterests = [];

export const ParseSearches = () =>
{
	let obj =
	{
		"cities": [],
		"interests": [],
	};

	searchCities.forEach(element => { obj[0].push(element.name); });
	searchInterests.forEach(element => { obj[1].push(element.name); });

	return obj;
};

const AddCitySearch = (cityName) =>
{
	if (searchCities.indexOf(cityName) !== -1)
		return;

	let card = { name: cityName, obj: null };

	let elem = document.createElement("div");
	elem.classList.add("card");
	document.getElementById("pick-cities").getElementsByClassName("cards-holder").item(0).appendChild(elem);

	let name = document.createElement("h2");
	elem.appendChild(name);
	name.textContent = cityName;

	let br = document.createElement("br");
	elem.appendChild(br);

	let more = document.createElement("h2");
	elem.appendChild(more);
	more.textContent = "Click to learn more";

	card.obj = elem;

	searchCities.push(card);
};

const AddInterestSearch = (interestName) =>
{
	if (searchInterests.indexOf(interestName) !== -1)
		return;

	let card = { name: interestName, obj: null };

	let elem = document.createElement("div");
	elem.classList.add("card");
	document.getElementById("pick-interests").getElementsByClassName("cards-holder").item(0).appendChild(elem);

	let name = document.createElement("h2");
	elem.appendChild(name);
	name.textContent = interestName;

	let br = document.createElement("br");
	elem.appendChild(br);
	elem.appendChild(br);

	card.obj = elem;

	searchInterests.push(card);
};

const RemoveCitySearch = (cityName) =>
{
	const index = searchCities.indexOf(cityName);

	if (index !== -1)
		searchCities.splice(index, 1);
};

const RemoveInterestSearch = (interestName) =>
{
	const index = searchInterests.indexOf(interestName);

	if (index !== -1)
		searchInterests.splice(index, 1);
};

const inputCity = document.getElementById("search-cities");
const inputInterest = document.getElementById("search-interests");

inputCity.addEventListener('keydown', (event) =>
{
	if (event.key !== 'Enter')
		return;

	event.preventDefault();

	const search = inputCity.value.trim();
	if (search)
		AddCitySearch(search);

	inputCity.value = "";
});

inputInterest.addEventListener('keydown', (event) =>
{
	if (event.key !== 'Enter')
		return;

	event.preventDefault();

	const search = inputInterest.value.trim();
	if (search)
		AddInterestSearch(search);

	inputInterest.value = "";
});
