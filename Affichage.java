package groupesourire.app;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;

import javax.swing.ImageIcon;
import javax.swing.JPanel;

import com.mathmaurer.objets.Bloc;
import com.mathmaurer.objets.TuyauRouge;
import com.mathmaurer.personnages.Mario;


//***** La classe Affichage est le classe la plus importante de l'application. *****//
//***** Elle est accessible par toutes les autres classes, contient le "moteur" de l'application *****//
//***** Elle g�re la partie graphique. *****//
@SuppressWarnings("serial")
public class Affichage extends JPanel {
	
	
	//**** VARIABLES **//
	private ImageIcon Fond;
	private Image Bouton1;
	private Image Bouton2;
	
	private ImageIcon Fond1;  
	private Image imgBouton1;  
	private ImageIcon Depart;  
	private Image imgDepart;
	
	private int xFond1;
	private int xFond2;
	private int dx;   // d�placement du fond d'�cran.
	private int xPos; // position absolue dans l'appli
	
	public Click click;
	public Bloc bloc1;
	
	
	//**** CONSTRUCTEUR ****//	
	public Affichage(){
		
		super();
		
		this.xFond1 = -50;
		this.xFond2 = 750;
		this.dx = 0;
		this.xPos = -1;
		
		Fond = new ImageIcon(getClass().getResource("/images/fondEcran.png"));
		this.imgFond1 = this.Fond.getImage();
		this.imgFond2 = this.Fond.getImage();
		
		this.Bouton1 = new ImageIcon(getClass().getResource("/images/bouton.png")); 
		this.imgBouton1 = this..getImage();  
		this.Depart = new ImageIcon(getClass().getResource("/images/depart.png"));
		this.imgDepart = this.Depart.getImage();
		
		click = new Click(300, 245);
		bloc1 = new Bloc(400, 180);
		
		this.setFocusable(true);
		this.requestFocusInWindow();
		this.addKeyListener(new Clavier());
		
		Thread Ecran = new Thread(new Ecran());
		Ecran.start();
	}
	
	
	//**** GETTERS ****//	
	public int getDx() {return dx;}
	
	public int getxPos() {return xPos;}


	//**** SETTERS ****//
	public void setDx(int dx) {this.dx = dx;}
	
	public void setxPos(int xPos) {this.xPos = xPos;}
		
	public void setxFond1(int xFond1) {this.xFond1 = xFond1;}

	public void setxFond2(int xFond2) {this.xFond2 = xFond2;}


	//**** METHODES ****//
	public void deplacementFond(){ // D�placement des images "fixes" de l'�cran 
		
		if(this.xPos >= 0){
			// Mise � jour des positions des �l�ments de l'appli
			this.xPos = this.xPos + this.dx;		
		    this.xFond1 = this.xFond1 - this.dx;
		    this.xFond2 = this.xFond2 - this.dx;
		}
		// Permanence du fond d'�cran
		if(this.xFond1 == -800){this.xFond1 = 800;}
		else if(this.xFond2 == -800){this.xFond2 = 800;}
		else if(this.xFond1 == 800){this.xFond1 = -800;}
		else if(this.xFond2 == 800){this.xFond2 = -800;}
	}


	public void paintComponent(Graphics g) { // Dessin de toutes les images visibles � l'�cran (appel toutes les 3 ms environ)
		
		super.paintComponent(g);
		Graphics g2 = (Graphics2D)g;

		//D�tection 
		if(this.click.contact() == true){
			this.click.setMarche(false);
			this.dx = 0;
		}
		
		this.deplacementFond();
		this.depart.deplacement();
		
		g2.drawImage(this.imgFond1, this.xFond1, 0, null); // Fond1
		g2.drawImage(this.imgFond2, this.xFond2, 0, null); // Fond 2
 		g2.drawImage(this.click.marche("click", 25), 300, 245, null); //*** code provisoire
 		g2.drawImage(this.imgBouton1, 10 - this.xPos, 95, null); // Bouton du d�but
 		g2.drawImage(this.imgDepart, 220 - this.xPos, 234, null); // Panneau d�part
 		g2.drawImage(this.Bouton1.getImgBouton1(), this.Bouton1.getX(), this.Bouton1.getY(), null);
 		g2.drawImage(this.bloc1.getImgBloc(), this.bloc1.getX() - this.xPos, this.bloc1.getY(), null);
	}
}