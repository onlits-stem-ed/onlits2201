namespace OnlineAssessment.Models;

public class Assessment
{
    public int Id { get; set; }
    public string Name { get; set; }
    public DateOnly AssessmentDate { get; set; }
    public TimeOnly AssessmentTime { get; set; }
    public int Duration { get; set; }


    public ICollection<Candidate> Candidates { get; }
    public ICollection<Question> Questions { get; }
}