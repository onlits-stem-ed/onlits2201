using Microsoft.AspNetCore.Mvc;

namespace ToDoApp.Controllers;          //file-scoped namespace

public class TodoItemController : Controller
{
    public IActionResult Index()
    {
        return View();
    }
}