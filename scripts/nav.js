import { LoadPage } from "./index.js";

const buttonNavHome = document.getElementById("nav-home");

buttonNavHome.addEventListener("click", () =>
{
	LoadPage("home");
});

const buttonNavBestEdu = document.getElementById("nav-edu");

buttonNavBestEdu.addEventListener("click", () =>
{
	// LoadPage("interest-best-cities");
});

const buttonNavBestWork = document.getElementById("nav-work");

buttonNavBestWork.addEventListener("click", () =>
{
	// LoadPage("interest-best-cities");
});

const buttonNavBestTravel = document.getElementById("nav-travel");

buttonNavBestTravel.addEventListener("click", () =>
{
	// LoadPage("interest-best-cities");
});

const buttonNavInfo = document.getElementById("nav-info");

buttonNavInfo.addEventListener("click", () =>
{
	LoadPage("info");
});

