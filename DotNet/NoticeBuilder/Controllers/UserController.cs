using Microsoft.AspNetCore.Mvc;

namespace NoticeBuilder.Controllers;

public class UserController : Controller
{
    public string Index()
    {
        return "User Controller's Default Method";
    }

    public IActionResult NewUser()
    {
        return View();
    }

    public IActionResult Login()
    {
        return View();
    }

    public IActionResult Authenticate()
    {
        ViewData["UserId"] = "new-user";
        return View("../Dashboard/Dashboard");
    }
}