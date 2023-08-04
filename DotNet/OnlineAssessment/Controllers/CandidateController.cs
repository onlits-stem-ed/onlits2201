using Microsoft.AspNetCore.Mvc;
using OnlineAssessment.Models;

namespace OnlineAssessment.Controllers
{
    public class CandidateController : Controller
    {
        private readonly OnlineAssessmentContext _context;

        public CandidateController(OnlineAssessmentContext context)
        {
            _context = context;
        }
        public IActionResult Index()
        {
            List<Candidate> candidates = _context.Candidates.ToList();
            return View(candidates);
        }

        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public IActionResult Create(Candidate candidate)
        {
            _context.Candidates.Add(new Candidate
            {
                Name = candidate.Name,
                Gender = candidate.Gender
            });
            _context.SaveChanges();

            List<Candidate> candidates = _context.Candidates.ToList();
            return View("Index", candidates);
        }

        public IActionResult Details(int id)
        {
            Candidate candidate = _context.Candidates.Find(id);
            return View(candidate);
        }

        public IActionResult Edit(int id)
        {
            Candidate candidate = _context.Candidates.Find(id);
            return View(candidate);
        }

        [HttpPost]
        public IActionResult Edit(int id, Candidate candidate)
        {
            Candidate _candidate = _context.Candidates.Find(id);
            _candidate.Name = candidate.Name;
            _candidate.Gender = candidate.Gender;
            _context.SaveChanges();
            List<Candidate> candidates = _context.Candidates.ToList();
            return View("Index", candidates);
        }

        public string Delete(int id)
        {
            return "Delete Method";
        }
    }
}