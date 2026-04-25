import { LoadPage } from "./index.js";
import { DeleteSearches, ParseSearches } from "./search.js";

const buttonNext = document.getElementById("search-interests-next");

buttonNext.addEventListener("click", () =>
{
	LoadPage("results");

	const parsed = ParseSearches();

	DeleteSearches();
});
