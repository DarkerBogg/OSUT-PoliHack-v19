import { LoadPage } from "./index.js";

const buttonNext = document.getElementById("search-cities-next");

buttonNext.addEventListener("click", () =>
{
	LoadPage("pick-interests");
});
