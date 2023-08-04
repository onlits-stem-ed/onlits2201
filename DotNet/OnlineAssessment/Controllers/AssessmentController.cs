using Microsoft.AspNetCore.Mvc;
using OnlineAssessment.Models;

namespace OnlineAssessment.Controllers;

public class AssessmentController: Controller
{
    private readonly OnlineAssessmentContext _context;

    public AssessmentController(OnlineAssessmentContext context)
    {
        _context = context;
    }
    public IActionResult Index()
    {
        List<Assessment> assessments = _context.Assessments.ToList();
        return View(assessments);
    }
}