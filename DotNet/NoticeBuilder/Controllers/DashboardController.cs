using Microsoft.AspNetCore.Mvc;

namespace NoticeBuilder.Controllers;

public class DashboardController : Controller
{
    public IActionResult Dashboard()
    {
        return View();
    }
}