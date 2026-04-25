import { LoadPage } from "./index.js";

const buttonSearch = document.getElementById("search-interests-icon");

buttonSearch.addEventListener("click", () =>
{
	LoadPage("results");
});
