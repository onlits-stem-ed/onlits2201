using Microsoft.AspNetCore.Mvc;

namespace NoticeBuilder.Controllers;

public class UserController : Controller
{
    public string Index()
    {
        return "User Controller's Default Method";
    }

    public IActionResult Login()
    {
        return View();
    }

    public IActionResult Authenticate()
    {
        return View("../Dashboard/Dashboard");
    }
}