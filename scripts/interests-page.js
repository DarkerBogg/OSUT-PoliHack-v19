import { LoadPage } from "./index.js";
import { ParseSearches } from "./search.js";

const buttonSearch = document.getElementById("search-interests-icon");

buttonSearch.addEventListener("click", () =>
{
	LoadPage("results");

	console.warn(ParseSearches());
});
