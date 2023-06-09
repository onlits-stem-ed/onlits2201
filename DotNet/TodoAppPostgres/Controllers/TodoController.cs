using Microsoft.AspNetCore.Mvc;
using TodoAppPostgres.Models;

namespace TodoAppPostgres.Controllers;

public class TodoController : Controller
{
    private readonly TodoContext _context;

    public TodoController(TodoContext context)
    {
        _context = context;
    }
    public IActionResult Index()
    {
        ViewData["todos"] = _context.Todos.ToList();
        return View();
    }

    public IActionResult Create()
    {
        return View();
    }

    [HttpPost]
    public IActionResult SaveData(string Name)
    {
        Todo todo = new Todo();
        todo.Name = Name;
        _context.Add(todo);
        _context.SaveChanges();
        ViewData["todos"] = _context.Todos.ToList();
        return View("Index");
    }
}