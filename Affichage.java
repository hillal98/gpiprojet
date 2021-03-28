package groupesourire.app;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;

import javax.swing.ImageIcon;
import javax.swing.JPanel;

import groupesourire.objets.Bloc;
import groupesourire.objets.Deplacement;
import groupesourire.objets.Bouton;
//***** La classe Affichage est le classe la plus importante de l'application. *****//
//***** Elle est accessible par toutes les autres classes, contient le "moteur" de l'application *****//


//***** La classe Affichage est le classe la plus importante de l'application. *****//
//***** Elle est accessible par toutes les autres classes, contient le "moteur" de l'application *****//
//***** Elle gère la partie graphique. *****//
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
	private int dx;   // déplacement du fond d'écran.
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
	public void deplacementFond(){ // Déplacement des images "fixes" de l'écran 
		
		if(this.xPos >= 0){
			// Mise à jour des positions des éléments de l'appli
			this.xPos = this.xPos + this.dx;		
		    this.xFond1 = this.xFond1 - this.dx;
		    this.xFond2 = this.xFond2 - this.dx;
		}
		// Permanence du fond d'écran
		if(this.xFond1 == -800){this.xFond1 = 800;}
		else if(this.xFond2 == -800){this.xFond2 = 800;}
		else if(this.xFond1 == 800){this.xFond1 = -800;}
		else if(this.xFond2 == 800){this.xFond2 = -800;}
	}


	public void paintComponent(Graphics g) { // Dessin de toutes les images visibles à l'écran (appel toutes les 3 ms environ)
		
		super.paintComponent(g);
		Graphics g2 = (Graphics2D)g;

		//Détection 
		if(this.click.contact() == true){
			this.click.setMarche(false);
			this.dx = 0;
		}
		
		this.deplacementFond();
		this.depart.deplacement();
		
		g2.drawImage(this.imgFond1, this.xFond1, 0, null); // Fond1
		g2.drawImage(this.imgFond2, this.xFond2, 0, null); // Fond 2
 		g2.drawImage(this.click.marche("click", 25), 300, 245, null); //*** code provisoire
 		g2.drawImage(this.imgBouton1, 10 - this.xPos, 95, null); // Bouton du début
 		g2.drawImage(this.imgDepart, 220 - this.xPos, 234, null); // Panneau départ
 		g2.drawImage(this.Bouton1.getImgBouton1(), this.Bouton1.getX(), this.Bouton1.getY(), null);
 		g2.drawImage(this.bloc1.getImgBloc(), this.bloc1.getX() - this.xPos, this.bloc1.getY(), null);
	}
}
