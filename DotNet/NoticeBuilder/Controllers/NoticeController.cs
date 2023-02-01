using Microsoft.AspNetCore.Mvc;

namespace NoticeBuilder.Controllers;

public class NoticeController : Controller
{
    public IActionResult NewNotice()
    {
        return View();
    }
}