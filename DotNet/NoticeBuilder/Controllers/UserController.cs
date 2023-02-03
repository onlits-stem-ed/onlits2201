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

    public IActionResult Authenticate(string user_id, string password)
    {
        if (user_id == "admin" && password == "admin")
        {
            ViewData["UserId"] = "new-user";
            return View("../Dashboard/Dashboard");
        }
        else
        {
            return View("Login");
        }
    }
}