import { LoadPage } from "./index.js";
import { DeleteSearches, ParseSearches } from "./search.js";

const buttonSearch = document.getElementById("search-interests-icon");

buttonSearch.addEventListener("click", () =>
{
	LoadPage("results");

	const parsed = ParseSearches();

	DeleteSearches();
});
